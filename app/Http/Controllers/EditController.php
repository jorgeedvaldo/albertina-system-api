<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ClienteController;
use App\Models\Cliente;
use App\Models\Morada;
use App\User;

class EditController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $DadosCliente = (new ClienteController)->getByNomeUsuario(auth()->user()->username)[0];
        return view('Auth.edit', compact('DadosCliente'));
    }

    public function update(Request $request)
    {
        Cliente::where('nomeusuario', auth()->user()->username)
        ->update([
            'Nome' => $request->name,
            'Sexo' => $request->Sexo,
            'NumeroBilhete' => $request->NumeroBilhete,
            'Telefone1' => $request->Telefone1,
            'Telefone2' => $request->Telefone2,
            ]);
        $cliente = (new ClienteController)->getByNomeUsuario(auth()->user()->username)[0];

        User::where('username', auth()->user()->username)
        ->update([
            'name' => $request->name,
            ]);

        Morada::where('Id', $cliente['IdMorada'])
        ->update([
            'Provincia' => $request->Provincia,
            'Municipio' => $request->Municipio,
            'Bairro' => $request->Bairro,
            'Rua' => $request->Rua,
            'NumeroCasa' => $request->NumeroCasa
            ]);

        $DadosCliente = (new ClienteController)->getByNomeUsuario(auth()->user()->username)[0];
        $isSaved=true;
        return view('Auth.edit', compact('DadosCliente', 'isSaved'));
    }
}
