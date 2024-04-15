<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SeccionInformacion
 * @package App\Models
 * @version April 4, 2024, 2:23 pm UTC
 *
 * @property \App\Models\Seccion $seccion
 * @property \Illuminate\Database\Eloquent\Collection $galeria
 * @property integer $seccion_id
 * @property string $titulo
 * @property string $informacion
 * @property string $subtitulo
 * @property string $sub_informacion
 * @property string $img_portada
 * @property string $img_2
 * @property string $img_3
 * @property string $img_4
 */
class SeccionInformacion extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'seccion_informacion';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    // protected $dates = ['deleted_at'];



    public $fillable = [
        'seccion_id',
        'titulo',
        'informacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'seccion_id' => 'integer',
        'titulo' => 'string',
        'informacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'seccion_id' => 'required|integer',
        'titulo' => 'nullable|string|max:191',
        'informacion' => 'nullable|string',
        'created_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function seccion()
    {
        return $this->belongsTo(\App\Models\Seccion::class, 'seccion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function galeria()
    {
        return $this->hasMany(\App\Models\Galeria::class, 'seccion_informacion_id');
    }
}
