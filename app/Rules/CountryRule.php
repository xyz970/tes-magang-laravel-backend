<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CountryRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $country = ['jp'=>'jp','id'=>'id','gb'=>'gb','fr'=>'fr'];
        if (!in_array($value,$country)) {
            $fail('Oops anda harus memilih salah satu dari daftar bahasa yang disediakan');
        }
        
    }
}
