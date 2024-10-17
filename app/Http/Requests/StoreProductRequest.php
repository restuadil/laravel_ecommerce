<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:products,name',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|min:10',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|numeric|min:0',
            'is_active' => 'boolean',
        ];
    }

    // Get the error messages for the defined validation rules.
    public function messages(): array
    {
        return [
            'name.required' => 'Product name is required',
            'name.unique' => 'The product name has already been taken',
            'price.required' => 'Product price is required',
            'description.required' => 'Product description is required',
            'description.min' => 'Product description must be at least 10 characters',
            'category_id.required' => 'Product category is required',
            'stock.required' => 'Product stock is required',
        ];
    }
}
