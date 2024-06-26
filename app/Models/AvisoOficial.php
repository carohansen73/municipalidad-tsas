<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class AvisoOficial
 * @package App\Models
 * @version June 19, 2024, 1:12 pm UTC
 *
 * @property string $titulo
 * @property string $nombre
 * @property string $descripcion
 * @property string $area
 * @property string $fecha
 */
class AvisoOficial extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'tre_avisos';

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'nombre',
        'descripcion',
        'area',
        'fecha'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'nombre' => 'string',
        'descripcion' => 'string',
        'area' => 'string',
        'fecha' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required|string|max:100',
        // 'nombre' => 'required|string|max:100',
        'descripcion' => 'required|string|max:300',
        'area' => 'required|string|max:20',
        'fecha' => 'required'
    ];


}
