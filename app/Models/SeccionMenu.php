<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeccionMenu extends Model
{
    use HasFactory;
    public $table = 'seccion_menu';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'abreviatura'
    ];


}
