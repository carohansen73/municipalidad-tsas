<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TramiteTipo extends Model
{
    use HasFactory;
    public $table = 'tramite_tipo';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'tipo',
    ];

    // public function getTramiteGuia()
    // {
    //     return $this->belongsTo(TramiteTipo::class, 'tipo_id');
    // }
}
