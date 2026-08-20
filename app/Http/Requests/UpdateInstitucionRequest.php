<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInstitucionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:255',
        ];
    }

    /**
     * Mensajes de validación en español, legibles.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'string' => 'El campo :attribute debe ser texto.',
            'max.string' => 'El campo :attribute no puede tener más de :max caracteres.',
        ];
    }

    /**
     * Nombres de campo en español, usados dentro de los mensajes de arriba.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'nombre' => 'nombre de la institución',
            'direccion' => 'dirección',
            'telefono' => 'teléfono',
        ];
    }
}
