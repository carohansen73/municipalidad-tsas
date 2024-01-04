<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    use HasFactory;

    public $table = 'archivos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'seccion_id',
    ];

    public function seccion()
    {
        return $this->belongsTo(SeccionPagina::class, 'seccion_id');
    }
}
