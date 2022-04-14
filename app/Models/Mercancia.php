<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_contenedor',
        'tipo_contenedor',
        'dimenciones',
        'fecha_descargo',
        'descripcion',
        'cantidad',
        'operacion_id',
    ];

}
