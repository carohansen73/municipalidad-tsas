<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public $table = 'evento';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'id',
        'seccion_id',
        'img',
        'vigente',
    ];

    public function seccion()
    {
        return $this->belongsTo(SeccionMenu::class, 'seccion_id');
    }


}
