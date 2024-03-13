<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitucionEducativa extends Model
{
    use HasFactory;

    public $table = 'institucion_educativa';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'nivel_id',
        'nombre',
        'ubicacion',
        'email',
        'contacto',
        'sitio_web',
        'instagram',
        'facebook',
        'horarios_de_atencion',
    ];

    public function nivel()
    {
        return $this->belongsTo(InstitucionEducativaNivel::class, 'nivel_id');
    }

    public function carreras()
    {
        return $this->hasMany(PropuestaAcademica::class);
    }

}



