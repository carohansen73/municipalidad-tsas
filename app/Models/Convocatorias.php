<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Convocatorias
 * @package App\Models
 * @version February 7, 2025, 11:37 am UTC
 *
 * @property string $titulo
 * @property string $descripcion
 * @property string $telefono
 * @property string $email
 * @property string $img
 */
class Convocatorias extends Model
{


    use HasFactory;

    public $table = 'fest_convocatoria';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'descripcion',
        'telefono',
        'email',
        'archivo',
        'link',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'descripcion' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'archivo' => 'string',
        'link' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required|string|max:191',
        'descripcion' => 'nullable|string',
        'telefono' => 'nullable|string|max:30',
        'email' => 'nullable|string|max:100',
        'archivo'  => 'nullable',
        'link'  => 'nullable',
        'img' => 'nullable'
    ];


}
