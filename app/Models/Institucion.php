<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'talleres_instituciones';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
    ];

    public function actividades()
    {
        return $this->hasMany(Actividad::class, 'institucion_id');
    }
}
