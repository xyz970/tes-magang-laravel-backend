<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class StatusRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $status = ['publish'=>'Publish','not_publish'=>'Not Publish'];
        if (!in_array($value,$status)) {
            $fail('Oops anda harus memilih salah satu dari pilihan yang disediakan');
        }
    }
}
