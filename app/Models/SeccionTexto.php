<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeccionTexto extends Model
{
    use HasFactory;


    public $table = 'seccion_textos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'seccion_id',
        'titulo',
        'informacion',
        'subtitulo',
        'sub_informacion',
        'img_portada',
        'img_2',
        'img_3',
        'img_4'
    ];

    public function seccion()
    {
        return $this->belongsTo(SeccionPagina::class, 'seccion_id');
    }

}
