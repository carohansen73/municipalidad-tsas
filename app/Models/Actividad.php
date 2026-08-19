<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $table = 'talleres_actividades';

    protected $fillable = [
        'taller_id',
        'institucion_id',
        'instructor',
        'modalidad',
        'costo',
        'fecha_inicio',
        'fecha_fin',
        'requisitos',
        'contacto_inscripcion',
        'imagen',
        'destacado',
        'activo',
    ];


    protected $casts = [
        'costo' => 'decimal:2',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'destacado' => 'boolean',
        'activo' => 'boolean',
    ];

    public function taller()
    {
        return $this->belongsTo(Taller::class, 'taller_id');
    }

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'institucion_id');
    }

    public function horarios()
    {
        return $this->hasMany(ActividadHorario::class, 'actividad_id');
    }

    /* =====================
       SCOPES
    ===================== */

    public function scopeActivo($query)
    {
        return $query->where('activo', true);
    }

    public function scopeDelDia($query, $diaSemana)
    {
        return $query->whereHas('horarios', function ($q) use ($diaSemana) {
            $q->where('dia_semana', $diaSemana);
        });
    }
}
