<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    use HasFactory;
    public $table = 'delegacion';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'descripcion',
        'img',
        'link',
    ];

}
