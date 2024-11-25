<?php

namespace App\Http\Requests\WhyChoose;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWhyChooseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'description' => ['required'],
        ];
    }
}