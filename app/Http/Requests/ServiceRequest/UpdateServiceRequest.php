<?php

namespace App\Http\Requests\ServiceRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
            'slug' => ['required','string'],
            'image' => ['nullable','image'],
            'description' => ['required'],
            'slider_page' => ['required','string'],

        ];
    }
}
