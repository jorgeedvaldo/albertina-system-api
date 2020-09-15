<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Morada;
use Illuminate\Http\Request;

class MoradaController extends Controller
{
    public function create(Request $request)
    {
        $morada = new Morada();
        $morada->Id = $request->Id;
        $morada->Provincia = $request->Provincia;
        $morada->Municipio = $request->Municipio;
        $morada->Bairro = $request->Bairro;
        $morada->Rua = $request->Rua;
        $morada->NumeroCasa = $request->NumeroCasa;

        $morada->save();

        echo 'Morada cadastrada com sucesso!';
    }

    public function update(Request $request, $id)
    {
        Morada::where('Id', $id)
        ->update([
            'Provincia' => $request->Provincia,
            'Municipio' => $request->Municipio,
            'Bairro' => $request->Bairro,
            'Rua' => $request->Rua,
            'NumeroCasa' => $request->NumeroCasa
            ]);
        echo Morada::find($id);
    }

    public function delete($id)
    {
        Morada::where('Id', $id)
        ->delete();
        echo 'Morada eliminada com sucesso!';
    }

    public function get()
    {
        return Morada::all();
    }

    public function getById($id)
    {
        return Morada::where('id', $id)->get();
    }
}
