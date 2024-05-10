<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeccionContacto extends Model
{
    use HasFactory;
    public $table = 'seccion_contacto';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'seccion_id',
        'direccion',
        'email',
        'telefono',
        'wsp',
        'fb',
        'ig',
        'pagina_web',
    ];

    public function seccion()
    {
        return $this->belongsTo(Seccion::class, 'seccion_id');
    }
}
