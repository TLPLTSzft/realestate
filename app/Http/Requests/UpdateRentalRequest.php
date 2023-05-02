<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRentalRequest extends FormRequest
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
            'user_id' => 'integer|exists:users,id',
            'realestate_id' => 'integer|exists:realestates,id',
            'booking_date' => 'date|date_format:Y-m-d|before:start_date',
            'start_date' => 'date|date_format:Y-m-d|after:booking_date|before:end_date',
            'end_date' => 'date|date_format:Y-m-d|after:start_date|nullable',
        ];
    }
}
