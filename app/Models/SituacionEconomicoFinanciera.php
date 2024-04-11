<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacionEconomicoFinanciera extends Model
{
    use HasFactory;


    public $table = 'tre_situacion';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'nombre',
        'area',
        'anio',
        'periodo',
        'titulo'
    ];


}
