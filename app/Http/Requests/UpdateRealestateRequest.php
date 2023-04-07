<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRealestateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            $furnishing = ['without furniture', 'basic equipment', 'fully furnished'],
            'realestate_code' => 'string|unique:realestates,realestate_code|size:7',
            'address' => 'string|max:100',
            'room' => 'decimal:(2,1)',
            'furnishing' => 'string|in: ' . implode(',', $furnishing),
            'rental_fee' => 'integer|between:50,300|nullable',
            'sale_price' => 'integer|between:10,100|nullable',
            'description' => 'string|max:30|nullable',
        ];
    }
}
