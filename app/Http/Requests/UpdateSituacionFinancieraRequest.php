<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\SituacionFinanciera;

class UpdateSituacionFinancieraRequest extends FormRequest
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
        return array_merge(SituacionFinanciera::$rules, [
            'nombre' => 'nullable|file|mimes:pdf|max:10240',
        ]);
    }
}
