<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    public $table = 'noticia';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'titulo',
        'descripcion',
        'categoria_id',
        'destacada',
        'fecha',
        'seccion_id'
    ];

    public function imgs()
    {
        return $this->hasMany(NoticiaImg::class);
    }

    public function categoria() {
        return $this->belongsTo(NoticiaCategoria::class, 'categoria_id');
    }

    public function seccion()
    {
        return $this->belongsTo(SeccionPagina::class, 'seccion_id');
    }

}
