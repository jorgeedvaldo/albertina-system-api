<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sincronizacao;
use Illuminate\Http\Request;

class SincronizacaoController extends Controller
{

    public function get()
    {
        return Sincronizacao::all();
    }

    public function getById($id)
    {
        return Sincronizacao::where('id', $id)->get();
    }
}
