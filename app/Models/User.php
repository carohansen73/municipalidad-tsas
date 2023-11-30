<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'apellido',
        'nombre',
        'email',
        'domicilio',
        'dni',
        'nro_tramite',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'dni',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'apellido' => 'string',
        'nombre' => 'string',
        'email' => 'string',
        'domicilio'=> 'string',
        'dni'=> 'string',
        'nro_tramite'=> 'string',
        'fecha_nacimiento'=> 'string',
        'genero' => 'string',
        'telefono' => 'integer',
        'dni' => 'integer',
        'email_verified_at' => 'datetime',
    ];

    public static $rules = [
        'apellido' => 'required|string|max:80',
        'nombre' => 'required|string|max:80',
        'email' => 'required|string|email|max:100',
        'domicilio'=> 'required|string',
        'dni' => 'required|numeric',
        'nro_tramite' => 'required|numeric',
        'fecha_nacimiento' => 'required|date_format:Y-m-d',
        'genero' => 'required|string|max:2',
        'telefono' => 'required|numeric',
    ];

    public static $messages = [
        'apellido.required' => 'El apellido es obligatorio.',
        'apellido.max' => 'El apellido no debe contener más de 80 caracteres.',
        'nombre.required' => 'El nombre es obligatorio.',
        'nombre.max' => 'El nombre no debe contener más de 50 caracteres.',
        'email.required' =>'El email es obligatorio.',
        'domicilio.required' => 'El domicilio es obligatorio.',

        'dni.required' => 'El DNI es obligatorio.',
        'dni.numeric' => 'El DNI debe ser numérico.',
        'nro_tramite.required' => 'El número de trámite es obligatorio.',
        'nro_tramite.numeric' => 'El número de trámite debe ser numérico.',

        'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
        'fecha_nacimiento.date_format' => 'La fecha de nacimiento tiene formato incorrecto.',

        'genero.required' => 'El género es obligatorio.',
        'telefono.required' => 'El teléfono es obligatorio.',
        'telefono.numeric' => 'El teléfono debe ser númerico.'
    ];

}
