<?php

namespace App\Http\Requests\CategoryList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['nullable'],
            'status' => ['nullable', 'boolean'],
            'category_id' => ['nullable', Rule::exists('categories', 'id')->withoutTrashed()],
            'image' => ['required', 'image'],
            'slider_page' => ['required', 'array'], // Validate as an array
            'slider_page.*' => ['required', 'string'],

        ];
    }
}
