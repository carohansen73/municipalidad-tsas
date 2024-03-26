<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticiaCategoria extends Model
{
    use HasFactory;
    public $table = 'noticia_categoria';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'area_id'
    ];

}
