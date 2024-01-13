<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScreeningRequest extends FormRequest
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
            'first_name' => 'required',
            'dob' => 'required|date_format:Y-m-d|before:today',
            'frequency' => 'required|in:Monthly,Weekly,Daily',
            'daily_frequency'=> 'in:1-2,3-4,5+',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First Name is required',
            'dob.required'        => 'Date of Birth is required',
            'dob.date_format'     => 'Date format must be `Y-m-d` format',
            'dob.before'          => 'Date of birth must be greater than today date',
            'frequency.required'  => 'Frequency is required',
            'frequency.in'        => 'Frequency can only be Monthly,Weekly or Daily',
            'daily_frequency.in'  => 'Daily Frequency can only be 1-2,3-4,5+',
        ];
    }

}
