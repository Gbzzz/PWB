<?php

namespace App\Http\Requests;

use App\Rules\ValidarEmail;
use App\Rules\ValidarSenha;

use Illuminate\Foundation\Http\FormRequest;

class ValidarCadastro extends FormRequest
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
            'email_usuario' => ['required', new ValidarEmail],
            'senha' => ['required', new ValidarSenha],
        ];
    }
}
