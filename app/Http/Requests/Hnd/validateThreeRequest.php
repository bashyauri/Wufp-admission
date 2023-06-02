<?php

namespace App\Http\Requests\Hnd;

use Illuminate\Foundation\Http\FormRequest;

class validateThreeRequest extends FormRequest
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
            'primary_school_name' => ['required'],
            'secondary_school_name' => ['required'],
            'primary_school_year' => ['required','digits:4'],
            'secondary_school_year' => ['required','digits:4'],
            'tertiary_school_name' => ['required'],
            'tertiary_school_year' => ['required','digits:4'],

        ];
    }
}