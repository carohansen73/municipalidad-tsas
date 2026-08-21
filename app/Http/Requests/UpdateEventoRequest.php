<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventoRequest extends FormRequest
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
            'seccion_id' => 'required|integer',
            'categoria_id' => 'required|integer',
            'descripcion' => 'nullable',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,jfif|max:5120',
        ];
    }
}
