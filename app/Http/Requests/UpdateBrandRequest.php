<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:10',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Brand name is required',
            'name.min' => 'Brand name must be at least 3 characters',
            'logo.required' => 'Brand description is required',
            'logo.min' => 'Brand description must be at least 10 characters',
            'image.required' => 'Brand image is required',
        ];
    }
}
