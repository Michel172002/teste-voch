<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargoColaboradorFormRequest extends FormRequest
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
            'colaborador_id' => ['required'],
            'nota_desempenho' => ['required', 'numeric', 'between:0,10'],
        ];
    }

    public function messages()
    {
        return [
            'nota_desempenho.between' => 'A nota de desempenho deve estar entre :min e :max.',
            'colaborador_id.required' => 'O campo colaborador é obrigatorio.'
        ];
    }
}
