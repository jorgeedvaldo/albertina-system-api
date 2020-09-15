<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'Cliente';
    public $timestamps = false;

    protected $fillable = [
        'Origem', 'Nome', 'Sexo', 'NumeroBilhete', 'Telefone1', 'Telefone2', 'NomeUsuario', 'Senha', 'IdMorada'
    ];
}
