<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToBasketRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Authorization handled by middleware
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'product_id' => 'required|integer|min:1',
            'count'      => 'required|integer|min:1|max:99',
        ];
    }

    /**
     * Get custom validation messages.
     */
    public function messages(): array
    {
        return [
            'product_id.required' => 'Product ID is required.',
            'product_id.integer' => 'Product ID must be a valid integer.',
            'product_id.min' => 'Product ID must be a positive number.',
            'count.required' => 'Quantity is required.',
            'count.integer' => 'Quantity must be a valid integer.',
            'count.min' => 'Quantity must be at least 1.',
            'count.max' => 'Quantity cannot exceed 99.',
        ];
    }

}
