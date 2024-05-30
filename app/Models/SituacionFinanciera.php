<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SituacionFinanciera
 * @package App\Models
 * @version April 16, 2024, 3:53 pm UTC
 *
 * @property string $nombre
 * @property string $area
 * @property integer $anio
 * @property string $periodo
 * @property string $titulo
 */
class SituacionFinanciera extends Model
{


    use HasFactory;

    public $table = 'tre_situacion';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'nombre',
        'area',
        'anio',
        'periodo',
        'titulo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'area' => 'string',
        'anio' => 'integer',
        'periodo' => 'string',
        'titulo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'area' => 'required|string|max:50',
        'anio' => 'required|integer',
        'periodo' => 'required|string|max:20',
        'titulo' => 'required|string|max:60'
    ];


}
