<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $match = preg_match('/^01[356789][0-9]{8}\b$/', $value);

        if(!$match){
            $fail('The :attribute must be a valid number(Max:11).');
        }
    }
}