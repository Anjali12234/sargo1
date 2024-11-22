<?php

namespace App\Http\Requests\Color;

use Illuminate\Foundation\Http\FormRequest;

class UpdateColorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [

            'type' => ['required'],
            'name' => ['required','string'],
            'color_code' => ['required','string'],
            'description' => ['required'],
            'files' => ['nullable', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf,jfif'],
        ];
    }
}
