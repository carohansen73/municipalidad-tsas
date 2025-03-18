<?php

namespace App\Models;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
/**
 * Class noticia
 * @package App\Models
 * @version February 29, 2024, 5:40 pm UTC
 *
 * @property \App\Models\User $usuario
 * @property \Illuminate\Database\Eloquent\Collection $noticiaCategoria
 * @property \Illuminate\Database\Eloquent\Collection $noticiaImgs
 * @property string $titulo
 * @property string $descripcion
 * @property string $fecha
 * @property string $categoria
 * @property boolean $publicada
 * @property boolean $destacada
 * @property string $pathname
 * @property integer $usuario_id
 */
class Noticia extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use Sluggable;

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    public $table = 'noticias';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'categoria',
        'publicada',
        'destacada',
        'pathname',
        'usuario_id',
        'views'
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
        'fecha' => 'date',
        'categoria' => 'string',
        'publicada' => 'boolean',
        'destacada' => 'boolean',
        //'pathname' => 'string',
        'usuario_id' => 'integer',
        'views' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required|string|max:180',
        'descripcion' => 'required|string',
        'fecha' => 'required',
        'categoria' => 'nullable|string|max:50',
        'publicada' => 'required|boolean',
        'destacada' => 'required|boolean',
        //'pathname' => 'required|string|max:191',
        //'usuario_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categorias()
    {
        //return $this->belongsToMany(User::class);
        return $this->belongsToMany(\App\Models\Categoria::class,'noticia_categoria')->withPivot('categoria_id', 'noticia_id');
        //return $this->belongsToMany(\App\Models\Categoria::class, 'noticia_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function Imgs()
    {
        return $this->hasMany(\App\Models\NoticiaImg::class, 'noticia_id');
    }
}
