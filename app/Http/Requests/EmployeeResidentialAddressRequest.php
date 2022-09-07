<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeResidentialAddressRequest extends FormRequest
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
            'place_of_res_onsite' => 'required',
            'res_address_onsite' => 'required',
            'place_of_res_offsite' => 'required',
            'res_address_offsite' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'place_of_res_onsite' => 'Place of residence (onsite) is required',
            'res_address_onsite' => 'Residential address (onsite) is required',
            'place_of_res_offsite' => 'Place of residence (offsite) is required',
            'res_address_offsite' => 'Residential address (offsite) is required',
        ];
    }
}
