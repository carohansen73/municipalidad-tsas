<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class LineUp
 * @package App\Models
 * @version February 5, 2025, 12:43 pm UTC
 *
 * @property string $artista
 * @property string $fecha
 * @property string $img
 * @property boolean $activa
 */
class LineUp extends Model
{

    use HasFactory;

    public $table = 'fdt_line_up';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'artista',
        'fecha',
        'img',
        'activa',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'artista' => 'string',
        'fecha' => 'date',
        'img' => 'string',
        'activa' => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'artista' => 'nullable|string|max:191',
        'fecha' => 'required',
        'img' => 'required'
    ];


}
