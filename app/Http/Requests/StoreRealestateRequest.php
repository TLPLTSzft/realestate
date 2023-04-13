<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRealestateRequest extends FormRequest
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
            'realestate_code' => 'required|string|unique:realestates,realestate_code|size:7',
            'address' => 'required|string|max:100',
            'room' => 'required|decimal:(2,1)',
            'furnishing' => 'required|string|in: ' . implode(',', $furnishing),
            'rental_fee' => 'integer|between:150,1500|nullable',
            'sale_price' => 'integer|between:15,150|nullable',
            'description' => 'string|max:30|nullable',
        ];
    }
}
