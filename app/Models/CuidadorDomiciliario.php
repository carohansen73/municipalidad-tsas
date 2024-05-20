<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuidadorDomiciliario extends Model
{
    use HasFactory;public $table = 'cuidador_domiciliario';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'responsable',
        'ubicacion',
        'localidad',
        'contacto',
        'habilitada',

    ];


}
