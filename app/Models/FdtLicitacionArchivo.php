<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FdtLicitacionArchivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'licitacion_id',
        'titulo',
        'archivo',
        'activa',
    ];

    public function licitacion()
    {
        return $this->belongsTo(FdtLicitacion::class);
    }
}
