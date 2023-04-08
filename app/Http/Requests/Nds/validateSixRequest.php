<?php

namespace App\Http\Requests\Nds;

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
            'jamb_no' => ['required'],
            'file' => [Rule::requiredIf(!isset(auth()->user()->jambDetails->file)),'image','mimes:jpg,png'],
            'score' => ['required']
        ];
    }
}