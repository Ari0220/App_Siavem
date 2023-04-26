<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class HoursStartValidate implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value >= "08:00" && $value <= "17:00";
    }
   
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Hora fuera de horario';
    }
}