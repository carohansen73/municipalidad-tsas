<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidenciaAdultos extends Model
{
    use HasFactory;
    public $table = 'residencia_adultos';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'responsable',
        'ubicacion',
        'localidad',
        'contacto',
        'habilitada'
    ];

    // public function getTramiteGuia()
    // {
    //     return $this->belongsTo(TramiteTipo::class, 'tipo_id');
    // }

}
