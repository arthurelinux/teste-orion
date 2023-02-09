<?php

namespace App\Http\Requests;

use App\Rules\cpf;
use Illuminate\Foundation\Http\FormRequest;

class StorageClientesRequest extends FormRequest
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
            //
            'nome'=>'required',
            'telefone'=>'required',
            'cpf'=>['required', new cpf()],
            'placa'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=>'Informe o nome',
            'telefone.required'=>'Informe o Telefone',
            'cpf.required'=>'CPF obrigatório',
            'placa.required'=>'Informe uma placa'
        ] ;
    }
}
