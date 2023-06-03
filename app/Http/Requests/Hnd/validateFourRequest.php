<?php

namespace App\Http\Requests\HNd;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class validateFourRequest extends FormRequest
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
            'ssce_certificate1' => ['required'],
            'exam_number1' => ['required'],
            'exam_year1' => ['required','digits:4'],
            'ssce_certificate2' => ['nullable'],
            'exam_number2' => ['nullable'],
            'exam_year2' => ['nullable','digits:4'],
        ];
    }
}
