<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CiudadUniversitaria extends Model
{
    use HasFactory;
    public $table = 'ciudad_universitaria';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'descripcion'
    ];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function detalles()
    {
        return $this->hasMany(\App\Models\CiudadUniversitariaDetalles::class, 'ciudad_id');
    }

      /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function fotos()
    {
        return $this->hasMany(\App\Models\CiudadUniversitariaFotos::class, 'ciudad_id');
    }

}
