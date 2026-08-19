<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadHorario extends Model
{
    use HasFactory;

    protected $table = 'talleres_actividad_horarios';

    protected $fillable = [
        'actividad_id',
        'dia_semana',
        'hora_inicio',
        'hora_fin',
    ];

    protected $casts = [
        'hora_inicio' => 'datetime:H:i',
        'hora_fin' => 'datetime:H:i',
    ];

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'actividad_id');
    }

    /**
     * 'mañana' (08:00-12:30), 'tarde' (13:00-18:00) o 'vespertino' (18:00-21:00) según hora_inicio.
     */
    public function getFranjaHorariaAttribute()
    {
        $hora = $this->hora_inicio->format('H:i');

        if ($hora >= '08:00' && $hora <= '12:30') {
            return 'mañana';
        }

        if ($hora >= '13:00' && $hora <= '18:00') {
            return 'tarde';
        }

        if ($hora >= '18:00' && $hora <= '21:00') {
            return 'vespertino';
        }

        return null;
    }
}
