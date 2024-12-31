<?php

namespace App\Http\Requests\CategoryList;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryListRequest extends FormRequest
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
            'image' => ['nullable', 'image'],
           

        ];
    }
}
