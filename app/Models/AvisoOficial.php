<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvisoOficial extends Model
{
    use HasFactory;


    public $table = 'tre_avisos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'titulo',
        'nombre',
        'descripcion',
        'area',
        'fecha'
    ];
}
