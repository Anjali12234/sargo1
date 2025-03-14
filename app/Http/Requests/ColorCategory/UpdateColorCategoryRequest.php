<?php

namespace App\Http\Requests\ColorCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateColorCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [

            'color_name' => ['required'],
            'color_code_image' => ['nullable','image'],

        ];
    }
}
