<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaActividad extends Model
{
    use HasFactory;

    protected $table = 'talleres_categorias_actividad';

    protected $fillable = [
        'nombre',
        'icono',
        'color',
    ];

    public function talleres()
    {
        return $this->hasMany(Taller::class, 'categoria_id');
    }
}
