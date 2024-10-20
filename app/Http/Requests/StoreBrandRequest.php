<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
            'name' => 'required|string|min:3|unique:brands,name',
            'description' => 'required|',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Brand name is required',
            'name.unique' => 'The brand name has already been taken',
            'name.min' => 'Brand name must be at least 3 characters',
            'description.required' => 'Brand description is required',
            'image.required' => 'Brand image is required',
        ];
    }
}
