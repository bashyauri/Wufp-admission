<?php

namespace App\Http\Requests\Hnd;

use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class validateOneRequest extends FormRequest
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
            'user_img' => [Rule::requiredIf(!auth()->user()->file),'image','mimes:jpg,png'],
            'gender' => ['required'],
            'marital_status' => ['required'],
            'next_of_kin' => ['required'],
            'next_of_kin_phone' => ['required','digits:11'],
            'department' => ['required'],
            'courses' => ['required'],
            'choices-day' => ['required'],
            'choices-month' => ['required'],
            'choices-year' => ['required'],
            'phone_no' => ['required','digits:11'],
        ];

    }
}
