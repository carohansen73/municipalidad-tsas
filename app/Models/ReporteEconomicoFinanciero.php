<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteEconomicoFinanciero extends Model
{
    use HasFactory;

    public $table = 'tre_reportes_eco';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'titulo',
        'periodo',
        'anio',
        'sector',
        'nombre_archivo',
        'descripcion',
        'fecha'
    ];


}
