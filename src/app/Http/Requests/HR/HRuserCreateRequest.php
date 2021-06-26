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
            "first_name" => "required|min:2|alpha",
            "last_name" => "required|min:3|max:100|alpha",
            "user_name" => "required|string|min:3|max:50",
            "password" => "required||min:8|max:15|alpha_num",
            "gender" => "required",
            "supervisor" => "required",
            "present_address" => "required|string|max:100",
            "phone" => "required|min:11",
            "email" => "required|string|email",
            "job_position" => "required",
            "hour_worked" => "required|numeric",
            "employment_start_date" =>"required|date",
            "image"=>"required|mimes:jpeg,bmp,png"
        ];
    }
}
