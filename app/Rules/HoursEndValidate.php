<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class HoursEndValidate implements Rule
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
        return $value >= "07:00" && $value <= "16:00";
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