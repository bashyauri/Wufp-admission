<?php

namespace App\Http\Requests\Nd;

use Illuminate\Foundation\Http\FormRequest;

class validateTwoRequest extends FormRequest
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
        return
            [
                'nationality' => ['required'],
                'cor_address' => ['required','max:200'],
                'kin_address' => ['required','max:200'],
                'home_address' => ['required','max:200'],
                'home_town' => ['required','max:50'],
                'state' => ['required'],
                'lga' => ['required'],
                'sponsor' => ['required','max:50'],
            ];
    }
}