<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Archivos
 * @package App\Models
 * @version April 8, 2024, 1:14 pm UTC
 *
 * @property string $nombre
 * @property string $nombre_agradable
 * @property integer $seccion_id
 * @property string $sub_seccion
 */
class Archivos extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'archivos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'nombre_agradable',
        'seccion_id',
        'sub_seccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'nombre_agradable' => 'string',
        'seccion_id' => 'integer',
        'sub_seccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'nombre_agradable' => 'nullable|string|max:191',
        'seccion_id' => 'nullable|integer',
        'sub_seccion' => 'nullable|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function seccion()
    {
        return $this->belongsTo(Seccion::class, 'seccion_id');
    }
}
