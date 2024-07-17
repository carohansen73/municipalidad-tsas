<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BoletinOficial
 * @package App\Models
 * @version May 31, 2024, 12:16 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $titulo
 * @property string $tipo
 * @property integer $anio
 * @property integer $orden
 * @property boolean $publica
 * @property integer $mes
 */
class BoletinOficial extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'tre_boletin';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];
    public $fillable = [
        'nombre',
        'descripcion',
        'titulo',
        'tipo',
        'anio',
        'orden',
        'publica',
        'mes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        // 'nombre' => 'string',
        'descripcion' => 'string',
        'titulo' => 'string',
        'tipo' => 'string',
        'anio' => 'integer',
        'orden' => 'integer',
        'publica' => 'boolean',
        'mes' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'nombre' => '',
        'descripcion' => 'required|string|max:265',
        'titulo' => 'required|string',
        // 'tipo' => 'required|string',
        //'anio' => 'required|integer',
        'orden' => 'required|integer',
        'publica' => 'required|boolean',
        'mes' => 'required|integer'
    ];


}
