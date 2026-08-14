<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFdtTicketsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return auth()->user()->can('editar tickets');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'descripcion' => 'nullable|string|max:5000',
            'estado_venta_presencial' => 'required|in:proximamente,activa,finalizada',
            'estado_venta_online' => 'required|in:proximamente,activa,finalizada',

            'fecha_inicio_presencial' => 'nullable|date',
            'lugar_presencial' => 'nullable|string|max:255',
            'horarios_presencial' => 'nullable|string',

            'fecha_inicio_online' => 'nullable|date_format:Y-m-d H:i',
            'url_venta_online' => 'nullable|url',

            'whatsapp' => 'nullable|string|max:50',
            'email' => 'nullable|email',

            'edicion_anio' => 'nullable|integer',
            'activa' => 'nullable|boolean',
        ];
    }
}
