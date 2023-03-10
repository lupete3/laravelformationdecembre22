<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Entrer votre adresse mail',
            'email.email' => 'Email invalide',
            'password.required' => 'Entrer votre mot de pass',
            'password.min' => 'Le mot de passe doit avoir au moins 3 caractères',
        ]; 
    }
}
