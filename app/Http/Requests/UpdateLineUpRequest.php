<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLineUpRequest extends FormRequest
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
            'artista' => 'nullable|string|max:191',
            'fecha' => 'required',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,jfif|max:5120',
        ];
    }
}
