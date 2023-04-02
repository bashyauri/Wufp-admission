<?php

namespace App\Http\Requests\Nds;

use Illuminate\Foundation\Http\FormRequest;

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
            'exam_year1' => ['required'],
        ];
    }
}