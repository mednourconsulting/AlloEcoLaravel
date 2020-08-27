<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyRequest extends FormRequest
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
            'titre' =>'required|min:3|max:100',
            'nom' =>'required|min:3|max:100',
            'prenom' =>'required|min:3|max:100',
            'presentation' => 'required|min:10|max:2000',
            'message' => 'required|min:10|max:2000',
            'body' => 'required|min:10|max:20000',
            'email' => 'required|email'
        ];
    }
}
