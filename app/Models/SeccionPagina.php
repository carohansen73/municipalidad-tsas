<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeccionPagina extends Model
{
    use HasFactory;
    public $table = 'seccion_pagina';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'pertenece_a',
        'portada',
    ];

    public function perteneceA()
    {
        return $this->belongsTo(SeccionMenu::class, 'pertenece_a');
    }

}
