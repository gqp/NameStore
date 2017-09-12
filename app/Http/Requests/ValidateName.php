<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateName extends FormRequest
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
            'name' => 'required|min:4',
        ];
    }

    public function messages()
    {
        return [
            'name.required' 	=> 	'field required',
            'name.min' 		=>	'There is a 4 character minimum.'
        ];
    }

}
