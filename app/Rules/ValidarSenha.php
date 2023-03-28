<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidarSenha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (strlen($value) < 8) {
            return false;
        }

        if (!preg_match('/[A-Z]/', $value)) {
            return false;
        }

        if (!preg_match('/[a-z]/', $value)) {
            return false;
        }

        if (!preg_match('/[0-9]/', $value)) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '*A senha deve ter pelo menos 8 caracteres, conter pelo menos uma letra maiúscula, uma letra minúscula e um número.*';
    }
}
