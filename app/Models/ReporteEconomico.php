<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ReporteEconomico
 * @package App\Models
 * @version April 16, 2024, 3:51 pm UTC
 *
 * @property string $titulo
 * @property integer $periodo
 * @property integer $anio
 * @property string $sector
 * @property string $nombre_arch
 * @property string $descripcion
 * @property string $fecha
 */
class ReporteEconomico extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'tre_reportes_eco';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';






    public $fillable = [
        'titulo',
        'periodo',
        'anio',
        'sector',
        'nombre_arch',
        'descripcion',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'periodo' => 'integer',
        'anio' => 'integer',
        'sector' => 'string',
        'nombre_arch' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required|string',
        'periodo' => 'required|integer',
        'anio' => 'required|integer',
        'sector' => 'required|string|max:12',
        'nombre_arch' => 'required',
    ];


}
