<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museo extends Model
{
    use HasFactory;
    public $table = 'museo';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'ig',
        'fb',
        'referente',
        'wsp',
        'email',
        'direccion',
        'portada',
    ];

    // public function getTramiteGuia()
    // {
    //     return $this->belongsTo(TramiteTipo::class, 'tipo_id');
    // }
}
