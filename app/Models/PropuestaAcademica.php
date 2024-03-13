<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropuestaAcademica extends Model
{
    use HasFactory;


    public $table = 'propuesta_academica';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'nombre',
        'periodo_inscripcion',
        'institucion_educativa_id',
        'informacion',
        'links',
        'visible',
    ];

    public function institucion()
    {
        return $this->belongsTo(institucionEducativa::class, 'institucion_educativa_id');
    }
}

