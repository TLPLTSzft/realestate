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
            'realestate_code' => 'string|size:7',
            'address' => 'string|max:100',
            'room' => 'decimal:(2,1)|between:0.5,6',
            'furnishing' => 'integer|between:0,2',
            'rental_fee' => 'integer|between:150,1500|nullable',
            'sale_price' => 'integer|between:15,150|nullable',
            'description' => 'string|max:30|nullable',
        ];
    }
}
