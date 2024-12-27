<?php

namespace App\Http\Requests\SuperCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuperCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
        ];
    }
}
