<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DeliveryRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'parcel.width' => 'required|numeric',
            'parcel.height' => 'required|numeric',
            'parcel.length' => 'required|numeric',
            'parcel.weight' => 'required|numeric',
            'recipient.name' => 'required|string|max:255',
            'recipient.phone' => 'required|string|max:15',
            'recipient.email' => 'required|email|max:255',
            'recipient.address' => 'required|string|max:500',
        ];
    }
}
