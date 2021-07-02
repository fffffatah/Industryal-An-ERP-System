<?php

namespace App\Http\Requests\HR;

use Illuminate\Foundation\Http\FormRequest;

class HRuserCreateRequest extends FormRequest
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
            "first_name" => "required|min:2",
            "last_name" => "required|min:3|max:200|alpha",
            "user_name" => "required|string|min:3|max:100",
            "password" => "required||min:8|max:15|alpha_num",
            "confirm_password" => "required||min:8|max:15|alpha_num|same:password",
            "gender" => "required",
            "user_type" => "required|max:100",
            "present_address" => "required|string|max:300",
            "phone" => "required|min:10",
            "email" => "required|string|email",
            "job_position" => "required",
            "hour_worked" => "required|numeric",
            
        ];
    }
}
