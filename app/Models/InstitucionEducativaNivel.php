<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitucionEducativaNivel extends Model
{
    use HasFactory;

    public $table = 'institucion_educativa_nivel';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'nivel',
        'icono'
    ];
}
