<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sincronizacao extends Model
{

    protected $table = 'Sincronizacao';
    public $timestamps = false;

    protected $fillable = [
        'Id', 'Tabela', 'Accao'
    ];
}
