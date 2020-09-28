<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function get()
    {
        return Pedido::all();
    }

    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->DataHoraFeita = now();
        //$pedido->HoraEntrega = $request->HoraEntrega;
        $pedido->Estado = 'Não Atendido';
        $pedido->Total = $request->Total;
        $pedido->ValorPago = $request->ValorPago;
        $pedido->Telefone1 = $request->Telefone1;
        $pedido->Telefone2 = $request->Telefone2;
        $pedido->Email = $request->Email;
        $pedido->Localizacao = $request->Localizacao;
        $pedido->AoChegar = $request->AoChegar;
        $pedido->IdCliente = $request->IdCliente;
        $pedido->OrigemCliente = $request->OrigemCliente;
        $pedido->save();
        return $pedido['id'];

    }

    public function getById($id)
    {
        return Pedido::where('id', $id)->get();
    }
}
