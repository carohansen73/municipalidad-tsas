<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoMunicipal extends Model
{
    use HasFactory;

    protected $fillable = [
        'legajo',
        'nombre',
        'apellido',
        'dni',
        'genero',
        'email',
        'telefono',
        'area',
    ];

    /*
     * Accessor para nombre completo
     */
    public function getNombreCompletoAttribute()
    {
        return "{$this->apellido}, {$this->nombre}";
    }

    //Cada empleado puede inscribirse una vez
    public function inscripcionSorteo()
    {
        return $this->hasOne(InscripcionSorteo::class);
    }
}
