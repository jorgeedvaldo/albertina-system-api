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

    public function getById($id)
    {
        return Pedido::where('id', $id)->get();
    }
}
