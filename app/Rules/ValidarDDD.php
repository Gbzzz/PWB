<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidarDDD implements Rule
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
        $dddsValidos = [
            '61', '62', '64', '65', '66', '67',
            '71', '73', '74', '75', '77', '85',
            '88', '98', '99', '82', '81', '87',
            '86', '89', '84', '79', '68', '96',
            '92', '97', '91', '93', '94', '69',
            '95', '63', '27', '28', '31', '32',
            '33', '34', '35', '37', '38', '21',
            '22', '24', '11', '12', '13', '14',
            '15', '16', '17', '18', '19', '41',
            '42', '43', '44', '45', '46', '51',
            '53', '54', '55', '47', '48', '49'
        ];
        return in_array($value, $dddsValidos);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '*ddd inválido.';
    }
}
