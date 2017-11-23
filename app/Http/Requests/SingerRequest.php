<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SingerRequest extends FormRequest
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
            'name' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'country' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Name field can't be blank",
            'gender.required' => "Please pick a gender",
            'description.required' => "Description field can't be blank",
            'country.required' => "Country field can't be blank"
        ];
    }
}
