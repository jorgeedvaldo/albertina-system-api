<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sincronizacao extends Model
{

    protected $table = 'Sincronizacao';
    protected $primaryKey = 'idSincronizacao';
    public $timestamps = false;

    protected $fillable = [
        'Id', 'Tabela', 'Accao'
    ];
}
