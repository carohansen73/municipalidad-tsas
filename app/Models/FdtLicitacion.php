<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FdtLicitacion extends Model
{
    use HasFactory;
     protected $table = 'fdt_licitaciones';

    protected $fillable = [
        'titulo',
        'descripcion',
        'activa',
    ];

        protected $casts = [
        'titulo' => 'string',
        'descripcion' => 'string',
        'activa' => 'boolean',
    ];


    public function archivos()
    {
        return $this->hasMany(FdtLicitacionArchivo::class, 'licitacion_id');
    }
}
