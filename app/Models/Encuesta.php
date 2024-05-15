<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;
    public $table = 'encuesta';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'tipo',
        'nombre',
        'link',

    ];



}
