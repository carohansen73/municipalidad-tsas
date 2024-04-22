<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Evento
 * @package App\Models
 * @version April 18, 2024, 12:21 pm UTC
 *
 * @property \App\Models\Seccion $seccion
 * @property integer $seccion_id
 * @property string $img
 * @property boolean $vigente
 * @property string $fecha_inicio
 * @property string $fecha_fin
 */
class Evento extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'evento';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'seccion_id',
        'nombre',
        'img',
        'fecha_inicio',
        'fecha_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'seccion_id' => 'integer',
        'nombre' => 'string',
        'img' => 'string',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'seccion_id' => 'required|integer',
         'img' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function seccion()
    {
        return $this->belongsTo(\App\Models\MenuSeccion::class, 'seccion_id');
    }
}
