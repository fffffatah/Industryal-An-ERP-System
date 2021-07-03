<?php

namespace App\Http\Requests\Sales;
use Illuminate\Foundation\Http\FormRequest;

class SalesProfileUpdateRequest extends FormRequest
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
            "firstname" => "required",
            "firstname" => "regex:/^[a-zA-Z ]*$/",
            "lastname" => "required",
            "lastname" => "regex:/^[a-zA-Z ]*$/",
            "email" => "required",
            "phone" => "required",
            "username" => "required|max:10000",
            "address" => "required"
        ];
    }

    public function messages()
    {
        return [
            "firstname.required" => "Please enter a first name",
            "firstname.regex" => "Please enter only alphabets",
            "lastname.required" => "Please enter a last name",
            "lastname.regex" => "Please enter only alphabets",
            "email.required" => "Please enter a email",
            "phone.required" => "Please enter a phone number",
            "username.required" => "Please enter an username",
            "address.required" => "Please enter an address"
        ];
    }
}