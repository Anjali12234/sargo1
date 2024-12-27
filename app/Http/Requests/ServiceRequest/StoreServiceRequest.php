<?php

namespace App\Http\Requests\ServiceRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'image' => ['required','image'],
            'description' => ['required'],
            'slider_page' => ['required','string'],
        ];
    }
}
