<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'titre' => 'required|min:3',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Entrer un titre de l\'article ',
            'titre.min' => 'Le tire doit avoir au moins 3 caractères',
            'description.required' => 'Entrer la description de l\'article'
        ];
    }
}
