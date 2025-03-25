<?php

namespace App\Http\Requests\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'type' => ['required','string'],
            'keywords' => ['required','string'],
            'image' => ['nullable','image'],
            'description' => ['nullable'],
        ];
    }
}
