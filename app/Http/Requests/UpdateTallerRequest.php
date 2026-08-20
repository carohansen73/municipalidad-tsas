<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTallerRequest extends FormRequest
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
            'activo' => 'nullable|boolean',

            'lugares' => 'required|array|min:1',
            'lugares.*.id' => 'nullable|integer|exists:talleres_actividades,id',
            'lugares.*.institucion_id' => 'required|exists:talleres_instituciones,id',
            'lugares.*.instructor' => 'nullable|string|max:255',
            'lugares.*.modalidad' => 'required|in:gratuita,arancelada',
            'lugares.*.costo' => 'nullable|numeric|min:0',
            'lugares.*.fecha_inicio' => 'nullable|date',
            'lugares.*.fecha_fin' => 'nullable|date|after_or_equal:lugares.*.fecha_inicio',
            'lugares.*.requisitos' => 'nullable|string',
            'lugares.*.contacto_inscripcion' => 'nullable|string|max:255',
            'lugares.*.imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'lugares.*.destacado' => 'nullable|boolean',
            'lugares.*.activo' => 'nullable|boolean',

            'lugares.*.horarios' => 'required|array|min:1',
            'lugares.*.horarios.*.id' => 'nullable|integer|exists:talleres_actividad_horarios,id',
            'lugares.*.horarios.*.dia_semana' => 'required|in:lunes,martes,miercoles,jueves,viernes,sabado,domingo',
            'lugares.*.horarios.*.hora_inicio' => 'required|date_format:H:i',
            'lugares.*.horarios.*.hora_fin' => 'required|date_format:H:i|after:lugares.*.horarios.*.hora_inicio',
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
            'min.array' => 'Tenés que cargar al menos :min :attribute.',
            'min.numeric' => 'El campo :attribute no puede ser negativo.',
            'numeric' => 'El campo :attribute debe ser un número.',
            'integer' => 'El campo :attribute debe ser un número entero.',
            'boolean' => 'El campo :attribute debe ser verdadero o falso.',
            'date' => 'El campo :attribute debe ser una fecha válida.',
            'date_format' => 'El campo :attribute debe tener el formato :format.',
            'after' => 'El campo :attribute debe ser posterior a :date.',
            'after_or_equal' => 'El campo :attribute debe ser igual o posterior a :date.',
            'in' => 'El valor elegido para :attribute no es válido.',
            'exists' => 'El valor elegido para :attribute no existe.',
            'image' => 'El campo :attribute debe ser una imagen.',
            'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
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
            'nombre' => 'nombre del taller',
            'descripcion' => 'descripción',
            'categoria_id' => 'categoría',
            'publico_id' => 'público',
            'activo' => 'estado activo',

            'lugares' => 'lugares',
            'lugares.*.institucion_id' => 'institución',
            'lugares.*.instructor' => 'instructor',
            'lugares.*.modalidad' => 'modalidad',
            'lugares.*.costo' => 'costo',
            'lugares.*.fecha_inicio' => 'fecha de inicio',
            'lugares.*.fecha_fin' => 'fecha de fin',
            'lugares.*.requisitos' => 'requisitos',
            'lugares.*.contacto_inscripcion' => 'contacto para inscripción',
            'lugares.*.imagen' => 'imagen',
            'lugares.*.destacado' => 'destacado',
            'lugares.*.activo' => 'estado activo del lugar',

            'lugares.*.horarios' => 'horarios',
            'lugares.*.horarios.*.dia_semana' => 'día',
            'lugares.*.horarios.*.hora_inicio' => 'hora de inicio',
            'lugares.*.horarios.*.hora_fin' => 'hora de fin',
        ];
    }
}
