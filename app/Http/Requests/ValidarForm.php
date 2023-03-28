<?php

namespace App\Http\Requests;

use App\Rules\NomeCompl;
use App\Rules\ValidarDataNasc;
use App\Rules\ValidarDDD;
use App\Rules\ValidarEmail;
use App\Rules\ValidarNome;
use App\Rules\ValidarTelefone;
use App\Rules\ValidarTurno;
use Illuminate\Foundation\Http\FormRequest;

class ValidarForm extends FormRequest
{
    /**
     * Drmine if the user is authorized to make this request.
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
            'nome_aluno' => ['required', new ValidarNome],
            'nascimento_aluno' => ['required', new ValidarDataNasc],
            'nome_mae' => ['required', new ValidarNome],
            'nome_pai' => ['required', new ValidarNome],
            'ddd' => ['required', new ValidarDDD],
            'telefone' => ['required', new ValidarTelefone],
            'email_aluno' => ['required', new ValidarEmail],
        ];
    }
}
