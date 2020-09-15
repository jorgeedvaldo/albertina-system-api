<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'Produto';
    public $timestamps = false;

    protected $fillable = [
        'Nome', 'Preco', 'Stock', 'Estado', 'Descricao', 'UrlImagem'
    ];
}
