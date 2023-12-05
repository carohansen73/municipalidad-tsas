<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    use HasFactory;
    public $table = 'reclamo';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'titulo',
        'descripcion',
        'tema_id',
        'localidad',
        'usuario_id',
        'admin_id',
        'estado',
        'imagen'
    ];

    protected $casts = [
        'id' => 'integer',
        'tema_id' => 'integer',
        'usuario_id' => 'integer',
        'admin_id' => 'integer',
    ];

    public static $rules = [
        'titulo' => 'nullable|string|max:100',
        'descripcion' => 'required|string',
        'area_id' => 'required',
        'localidad' => 'required|string|max:100',
        'imagen' => 'nullable|mimes:jpeg,png,jpg,jfif|max:5120'
    ];

    public static $messages = [
        'descripcion.required' => 'Debe ingresar la cosulta/reclamo.'
    ];

    public function tema()
    {
        return $this->belongsTo(ReclamoTema::class, 'tema_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function administrador()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

}
