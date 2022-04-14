<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'folio',
        'pedimento',
        'cliente',
        'aduana',
        'patente',
        't_mercancia',
        't_operacion',
        'estatus',
    ];

}
