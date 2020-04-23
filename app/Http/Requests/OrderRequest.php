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
            // Personal details
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

//            // Company details
//            'company.name' => 'required_if:company.details,on|string|max:100',
//            'company.id_number' => 'required_if:company.details,on|string|max:50',
//            'company.street' => 'required_if:company.details,on|string|max:30',
//            'company.zip' => 'required_if:company.details,on|string|max:20',
//            'company.city' => 'required_if:company.details,on|string|max:50',
//            'company.region' => 'required_if:company.details,on|string|max:50',
//            'company.country' => 'required_if:company.details,on|string|max:3',
//
//            // Joint details
//            'joint.name' => 'required_if:joint.details,on|string|max:80',
//            'joint.id' => 'required_if:joint.details,on|string|max:50',

            'agree' => 'required|accepted'
        ];
    }
}
