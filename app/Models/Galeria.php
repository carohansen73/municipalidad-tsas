<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;

    public $table = 'galeria';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'img',
        'seccion_informacion_id',
        'tipo',
    ];

    public function seccion()
    {
        return $this->belongsTo(SeccionInformacion::class, 'seccion_texto_id');
    }


}
