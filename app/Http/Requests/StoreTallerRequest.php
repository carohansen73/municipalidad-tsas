<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTallerRequest extends FormRequest
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
            'descripcion' => 'nullable|string',
            'categoria_id' => 'required|exists:talleres_categorias_actividad,id',
            'publico_id' => 'required|exists:talleres_publicos,id',

            'lugares' => 'required|array|min:1',
            'lugares.*.institucion_id' => 'required|exists:talleres_instituciones,id',
            'lugares.*.instructor' => 'nullable|string|max:255',
            'lugares.*.modalidad' => 'required|in:gratuita,arancelada',
            'lugares.*.costo' => 'nullable|numeric|min:0|required_if:lugares.*.modalidad,arancelada',
            'lugares.*.fecha_inicio' => 'nullable|date',
            'lugares.*.fecha_fin' => 'nullable|date|after_or_equal:lugares.*.fecha_inicio',
            'lugares.*.requisitos' => 'nullable|string',
            'lugares.*.contacto_inscripcion' => 'nullable|string|max:255',

            'lugares.*.horarios' => 'required|array|min:1',
            'lugares.*.horarios.*.dia_semana' => 'required|in:lunes,martes,miercoles,jueves,viernes,sabado,domingo',
            'lugares.*.horarios.*.hora_inicio' => 'required|date_format:H:i',
            'lugares.*.horarios.*.hora_fin' => 'required|date_format:H:i|after:lugares.*.horarios.*.hora_inicio',
        ];
    }
}
