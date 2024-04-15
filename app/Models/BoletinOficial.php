<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoletinOficial extends Model
{
    use HasFactory;

    public $table = 'tre_boletin';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'nombre',
        'descripcion',
        'titulo',
        'tipo',
        'mes',
        'anio',
        'orden',
        'publica'
    ];

}
