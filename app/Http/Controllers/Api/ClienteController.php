<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create(Request $request)
    {
        $cliente = new Cliente();
        $cliente->Id = $request->Id;
        $cliente->Origem = $request->Origem;
        $cliente->Nome = $request->Nome;
        $cliente->Sexo = $request->Sexo;
        $cliente->NumeroBilhete = $request->NumeroBilhete;
        $cliente->Telefone1 = $request->Telefone1;
        $cliente->Telefone2 = $request->Telefone2;
        $cliente->NomeUsuario = $request->NomeUsuario;
        $cliente->Senha = $request->Senha;
        $cliente->IdMorada = $request->IdMorada;
        $cliente->save();

        echo 'Cliente cadastrado com sucesso!';
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->Origem = $request->Origem;
        $cliente->Nome = $request->Nome;
        $cliente->Sexo = $request->Sexo;
        $cliente->NumeroBilhete = $request->NumeroBilhete;
        $cliente->Telefone1 = $request->Telefone1;
        $cliente->Telefone2 = $request->Telefone2;
        $cliente->NomeUsuario = $request->NomeUsuario;
        $cliente->Senha = $request->Senha;
        $cliente->IdMorada = $request->IdMorada;
        $cliente->save();

        echo 'Cliente cadastrado com sucesso!';
    }

    public function update(Request $request, $id)
    {
        Cliente::where('Id', $id)
        ->update([
            'Nome' => $request->Nome,
            'Sexo' => $request->Sexo,
            'NumeroBilhete' => $request->NumeroBilhete,
            'Telefone1' => $request->Telefone1,
            'Telefone2' => $request->Telefone2,
            'Senha' => $request->Senha
            ]);
        echo Cliente::find($id);
    }

    public function delete($id)
    {
        Cliente::where('Id', $id)
        ->delete();
        echo 'Cliente eliminado com sucesso!';
    }

    public function get()
    {
        return Cliente::all();
    }

    public function getById($id)
    {
        return Cliente::with('Morada')->where('Id', $id)->get();
    }

    public function getByNomeUsuario($NomeUsuario)
    {
        return Cliente::with('Morada')->where('NomeUsuario', $NomeUsuario)->get();
    }
}
