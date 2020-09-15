<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Morada extends Model
{
    protected $table = 'Morada';
    public $timestamps = false;

    protected $fillable = [
        'Provincia', 'Municipio', 'Bairro', 'Rua', 'NumeroCasa'
    ];
}
