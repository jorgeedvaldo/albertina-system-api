<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PedidoProduto;
use Illuminate\Http\Request;

class PedidoProdutoController extends Controller
{
    public function store(Request $request)
    {
        $pedidoProduto = new PedidoProduto();
        $pedidoProduto->IdPedido = $request->IdPedido;
        $pedidoProduto->IdProduto = $request->IdProduto;
        $pedidoProduto->Preco = $request->Preco;
        $pedidoProduto->Quantidade = $request->Quantidade;
        $pedidoProduto->save();
        return $pedidoProduto;

    }

    public function get()
    {
        return PedidoProduto::all();
    }
}
