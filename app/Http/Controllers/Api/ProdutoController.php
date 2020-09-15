<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create(Request $request)
    {
        $produto = new Produto();
        $produto->Id = $request->Id;
        $produto->Nome = $request->Nome;
        $produto->Preco = $request->Preco;
        $produto->Stock = $request->Stock;
        $produto->Estado = $request->Estado;
        $produto->Descricao = $request->Descricao;
        $produto->UrlImagem = $request->UrlImagem;

        $produto->save();

        echo 'Produto cadastrado com sucesso!';
    }

    public function update(Request $request, $id)
    {
        Produto::where('Id', $id)
        ->update([
            'Nome' => $request->Nome,
            'Preco' => $request->Preco,
            'Stock' => $request->Stock,
            'Estado' => $request->Estado,
            'Descricao' => $request->Descricao,
            'UrlImagem' => $request->UrlImagem
            ]);
        //dd($request->file('photo'));
       //$request->file('photo', 'public')->store('produtos');
        echo   Produto::find($id);
    }

    public function delete($id)
    {
        Produto::where('Id', $id)
        ->delete();
        echo 'Produto eliminado com sucesso!';
    }

    public function get()
    {
        return Produto::all();
    }

    public function getById($id)
    {
        return Produto::where('id', $id)->get();
    }
}
