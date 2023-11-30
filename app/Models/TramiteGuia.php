<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TramiteGuia extends Model
{
    use HasFactory;
    public $table = 'tramite_guia';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'titulo',
        'descripcion',
        'lugar',
        'horario',
        'quien',
        'requisitos',
        'costo',
        'contacto',
        'links',
        'tipo_id',
        'area_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'tipo_id' => 'integer',
        'area_id' => 'integer',
    ];

    // public static $rules = [
    //     'apellido' => 'required|string|max:80',
    //     'nombre' => 'required|string|max:80',
    //     'email' => 'required|string|email|max:100',
    //     'domicilio'=> 'required|string',
    //     'dni' => 'required|numeric',
    //     'nro_tramite' => 'required|numeric',
    //     'fecha_nacimiento' => 'required|date_format:Y-m-d',
    //     'genero' => 'required|string|max:2',
    //     'telefono' => 'required|numeric',
    // ];

    // public static $messages = [
    //     'apellido.required' => 'El apellido es obligatorio.',
    //     'apellido.max' => 'El apellido no debe contener más de 80 caracteres.',
    //     'nombre.required' => 'El nombre es obligatorio.',
    //     'nombre.max' => 'El nombre no debe contener más de 50 caracteres.',
    //     'email.required' =>'El email es obligatorio.',
    //     'domicilio.required' => 'El domicilio es obligatorio.',


    //     'dni.required' => 'El DNI es obligatorio.',
    //     'dni.numeric' => 'El DNI debe ser numérico.',
    //     'nro_tramite.required' => 'El número de trámite es obligatorio.',
    //     'nro_tramite.numeric' => 'El número de trámite debe ser numérico.',

    //     'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
    //     'fecha_nacimiento.date_format' => 'La fecha de nacimiento tiene formato incorrecto.',

    //     'genero.required' => 'El género es obligatorio.',
    //     'telefono.required' => 'El teléfono es obligatorio.',
    //     'telefono.numeric' => 'El teléfono debe ser númerico.'
    // ];

    /**
    * Get the user that owns the phone.
    */
    // public function getTipo()
    // {
    //     return $this->belongsTo('App\Models\TramiteTipo');
    // }
    // public function getArea()
    // {
    //     return $this->belongsTo('App\Models\Area');
    // }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function tipo()
    {
        return $this->belongsTo(TramiteTipo::class, 'tipo_id');
    }
}
