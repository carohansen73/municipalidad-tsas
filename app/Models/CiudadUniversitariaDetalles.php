<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CiudadUniversitariaDetalles extends Model
{
    use HasFactory;
    public $table = 'ciudad_universitaria_detalles';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'ciudad_id',
       'descripcion'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ciudad()
    {
        return $this->belongsTo(CiudadUniversitaria::class, 'ciudad_id');
    }

}
