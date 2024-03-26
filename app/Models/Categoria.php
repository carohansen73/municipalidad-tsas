<?php

namespace App\Models;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Categoria
 * @package App\Models
 * @version February 29, 2024, 5:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $noticiaCategoria
 * @property string $nombre
 */
class Categoria extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'categorias';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function noticias()
    {
        return $this->belongsToMany(\App\Models\Noticia::class,'noticia_categoria')->withPivot('noticia_id','categoria_id');
     }

}
