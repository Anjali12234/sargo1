<?php

namespace App\Http\Requests\Color;

use Illuminate\Foundation\Http\FormRequest;

class StoreColorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [

            'color_category_id' => ['required'],
            'name' => ['required','string'],
            'color_code_image' => ['required','image'],
            'color_code' => ['required','string'],
            'description' => ['required'],
            'files' => ['required', 'array'],
            'files.*' => ['mimes:png,jpg,jpeg,pdf,jfif'],
        ];
    }
}
