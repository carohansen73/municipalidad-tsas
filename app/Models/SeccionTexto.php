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
    ];

    public function seccion()
    {
        return $this->belongsTo(SeccionPagina::class, 'seccion_id');
    }

    public function imgs()
    {
        return $this->hasMany(Galeria::class);
    }
}
