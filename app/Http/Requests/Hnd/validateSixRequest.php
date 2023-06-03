<?php

namespace App\Http\Requests\Hnd;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class validateSixRequest extends FormRequest
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
            'certificate_type' => ['required','string'],
            'course_name' => ['required','string'],
            'grade_obtained' => ['required','string'],
            'certificate' => [Rule::requiredIf(!isset(auth()->user()->higherEducation->certificate)),'mimes:jpg,png,pdf'],
        ];
    }
}
