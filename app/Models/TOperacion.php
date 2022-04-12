<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TOperacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'pais',
    ];

    public function operacion()
    {
        return $this->belongsTo('App\Models\Operacion');
    }
}
