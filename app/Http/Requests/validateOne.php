<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class validateOne extends FormRequest
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
             'first_name' => ['required', 'max:50'],
            'last_name' => ['required','max:50'],
            'middle_name' => ['max:50'],
            'program_id' => ['required'],
            'gender' => ['required'],
            'marital_status' => ['required'],


            'department' => ['required'],
            'courses' => ['required'],
            'phone_no' => ['required','exact:11'],
            'choices' => ['required','email'],
            'password' => ['required', 'min:6', 'max:20', 'confirmed'],
        ];
    }
}