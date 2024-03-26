<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaPortada extends Model
{
    use HasFactory;
    public $table = 'galeria_portada';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'img',
        'seccion_id',
    ];

    public function seccion()
    {
        return $this->belongsTo(SeccionTexto::class, 'seccion_id');
    }

}
