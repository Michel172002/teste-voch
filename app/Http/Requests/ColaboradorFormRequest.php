<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorFormRequest extends FormRequest
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
            'nome' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'cpf' => ['required','size:11'],
            'unidade_id' => ['required'],
            'cargo_id' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'unidade_id.required' => 'O campo unidade é obrigatorio.',
            'cargo_id.required' => 'O campo cargo é obrigatorio.',
        ];
    }
}
