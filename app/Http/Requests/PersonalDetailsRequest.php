<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalDetailsRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'telephone_no' => 'required|numeric|unique:employees',
            'birthdate' => 'required|date',
            'birth_place' => 'required',
            'hometown' => 'required',
            'email_address' => 'required|unique:employees',
            'ssnit_number' => 'required|unique:employees',
            'convid19_card_number' => 'required',
            'ghana_card_number' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'Firstname is required',
            'lastname.required' => 'Lastname is required',
            'telephone_no.required' => 'Phone number is required',
            'birthdate.required' => 'Date of birth is required',
            'birth_place.required' => 'Place of birth is required',
            'hometown.required' => 'Hometown is required',
            'email_address.required' => 'Email address is required',
            'ssnit_number.required' => 'SSNIT number is required',
            'convid19_card_number.required' => 'COVID-19 number is required',
            'ghana_card_number.required' => 'Ghana card number is required',
            'photo.required' => 'Photo is required',
        ];
    }
}
