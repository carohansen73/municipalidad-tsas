<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public $table = 'area';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'depende_de',
        'email',
        'nivel',
        'orden',
        'visible',
        'parent_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function organigrama()
    {
        return $this->hasMany(\App\Models\Organigrama::class, 'area_id');
    }





        /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function padre(){
        return $this->belongsTo(Area::class);
    }


  /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function hijos(){
        return $this->hasMany(\App\Models\Area::class, 'parent_id');
    }



        /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function relacion_areas()
    {
        //return $this->belongsToMany(User::class);
        return $this->belongsToMany(\App\Models\Area::class,'area_area')->withPivot('depende_de', 'area_id');
        //return $this->belongsToMany(\App\Models\Categoria::class, 'noticia_id');
    }

    //         /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  **/
    // public function depende()
    // {
    //     return $this->belongsTo(Area::class, 'depende_de');
    // }


}
