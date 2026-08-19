<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    use HasFactory;

    protected $table = 'talleres';

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id',
        'publico_id',
        'activo',
    ];

    protected $casts = [
        'activo' => 'boolean',
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaActividad::class, 'categoria_id');
    }

    public function publico()
    {
        return $this->belongsTo(Publico::class, 'publico_id');
    }

    public function actividades()
    {
        return $this->hasMany(Actividad::class, 'taller_id');
    }

    /* =====================
       SCOPES
    ===================== */

    public function scopeActivo($query)
    {
        return $query->where('activo', true);
    }
}
