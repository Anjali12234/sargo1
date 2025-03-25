<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [

            'product_cateogory_id' => ['required'],
            'title' => ['required','string'],
            'keywords' => ['required','string'],
            'image' => ['required','image'],
            'description' => ['required'],
        ];
    }
}
