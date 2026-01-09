<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripcionSorteo extends Model
{
    use HasFactory;
    protected $table = 'inscripciones_sorteo';

     protected $fillable = [
        'empleado_municipal_id',
        'numero_inscripcion',
        'valida'
    ];

    public function empleado()
    {
        return $this->belongsTo(EmpleadoMunicipal::class, 'empleado_municipal_id');
    }
}
