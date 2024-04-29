<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organigrama extends Model
{
    use HasFactory;
    public $table = 'organigrama';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'area_id',
        'responsable',
        'cargo',
        'direccion',
        'telefono',
        'email',

        'descripcion',
        'visible',
        // 'depende_de',

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

}
