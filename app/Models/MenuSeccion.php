<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSeccion extends Model
{
    use HasFactory;
    public $table = 'menu_seccion';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'path'
    ];


}
