<?php

namespace App\Http\Requests\HR;

use Illuminate\Foundation\Http\FormRequest;

class ProfileEditRequest extends FormRequest
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
            "last_name" => "required|min:3|max:100|alpha",
            "job_position" => "required",
            "phone" => "required|min:11",
            "email" => "required|string|email",
            "present_address" => "required|string|max:100",
        ];
    }
}
