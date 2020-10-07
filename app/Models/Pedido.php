<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'Pedido';
    public $timestamps = false;

    public function pedidoprodutos()
    {
        return $this->hasMany('App\Models\PedidoProduto', 'IdPedido', 'Id');
    }
}
