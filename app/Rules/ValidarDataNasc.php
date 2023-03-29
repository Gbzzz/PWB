<?php

namespace App\Rules;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class ValidarDataNasc implements Rule
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
        $date = Carbon::createFromFormat('Y-m-d', $value);
        $today = Carbon::today();

        return $date && $date->lte($today);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '*data de nascimento inválida.';
    }
}
