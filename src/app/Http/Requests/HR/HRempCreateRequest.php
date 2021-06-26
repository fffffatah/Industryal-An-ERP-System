<?php

namespace App\Http\Requests\HR;

use Illuminate\Foundation\Http\FormRequest;

class HRempCreateRequest extends FormRequest
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
            "employee_id" => "required|string",
            "employee_name" => "required|string|min:3|max:50",
            "gender" => "required",
            "supervisor" => "required",
            "present_address" => "required|string|max:100",
            "phone" => "required|min:11",
            "job_position" => "required",
            "start_time" => "required",
            "end_time" => "required",
            "hour_worked" => "required|numeric",
            "employment_start_date" =>"required|date",
        ];
    }
}
