<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;
    public $table = 'seccion';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'pertenece_a',
        'portada',
    ];

    public function perteneceA()
    {
        return $this->belongsTo(MenuSeccion::class, 'pertenece_a');
    }

}
