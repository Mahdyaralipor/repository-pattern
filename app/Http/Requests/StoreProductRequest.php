<?php

namespace App\Http\Requests;

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
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'is_available' => 'required|boolean'
        ];
    }
}
