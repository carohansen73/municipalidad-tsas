<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Grilla
 * @package App\Models
 * @version February 5, 2025, 12:50 pm UTC
 *
 * @property string $titulo
 * @property string $descripcion
 * @property string $fecha
 */
class Grilla extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'fest_grilla';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'descripcion',
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
        'descripcion' => 'string',
        'fecha' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required|string|max:191',
        'descripcion' => 'required|string',
        'fecha' => 'required'
    ];


}
