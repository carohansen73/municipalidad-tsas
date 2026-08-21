<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateConvocatoriasRequest extends FormRequest
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
            'titulo' => 'required|string|max:191',
            'descripcion' => 'nullable|string',
            'telefono' => 'nullable|string|max:30',
            'email' => 'nullable|string|max:100',
            'link' => 'nullable',
            'archivo' => 'nullable|file|mimes:pdf|max:10240',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,jfif|max:5120',
        ];
    }
}
