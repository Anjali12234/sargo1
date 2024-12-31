<?php

namespace App\Http\Requests\SuperCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSuperCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'bg_image' => ['nullable','image'],
            'description' => ['nullable'],
            'slider_page' => ['required', 'array'], // Validate as an array
            'slider_page.*' => ['required', 'string'],
        ];
    }
}
