<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FdtTickets extends Model
{
    use HasFactory;
    protected $table = 'fdt_tickets';

    protected $fillable = [
        'descripcion',
        'estado_venta_presencial',
        'estado_venta_online',
        'fecha_inicio_presencial',
        'lugar_presencial',
        'horarios_presencial',
        'fecha_inicio_online',
        'url_venta_online',
        'whatsapp',
        'email',
        'edicion_anio',
        'activa',
    ];

    protected $casts = [
        'fecha_inicio_presencial' => 'date',
        'fecha_inicio_online' => 'datetime',
        'activa' => 'boolean',
    ];

    /* =====================
       SCOPES
    ===================== */

    public function scopeActiva($query)
    {
        return $query->where('activa', true);
    }

    public function scopePorAnio($query, $anio)
    {
        return $query->where('edicion_anio', $anio);
    }

}
