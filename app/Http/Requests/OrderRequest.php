<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:50',
            'street' => 'required|string|max:30',
            'zip' => 'required|string|max:20',
            'city' => 'required|string|max:50',
            'region' => 'required|string|max:50',
            'country' => 'required|string|max:3',
            'nationality' => 'required|string|max:3',
            'email' => 'required|email|max:70',
            'government_id' => 'required|string|max:50',
            'phone_code' => 'required|string|max:4',
            'phone' => 'required|string|max:20',

            'agree' => 'required|accepted'
        ];
    }
}
