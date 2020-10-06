<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ClienteController;

class LojaController extends Controller
{
    public function index()
    {
        $DadosCliente = [];
        if(auth()->check())
        {
            $DadosCliente = (new ClienteController())->getByNomeUsuario(auth()->user()->username)[0];
        }
        else
        {
            $DadosCliente = (new ClienteController())->getById(1)[0];
        }
        return view('loja', compact('DadosCliente'));
    }
}
