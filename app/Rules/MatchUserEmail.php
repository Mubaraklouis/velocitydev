<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

class MatchUserEmail implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  Closure  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Retrieve the authenticated user's email
        $userEmail = Auth::user()->email;

        // Compare the entered email with the authenticated user's email
        if (strtolower($value) !== strtolower($userEmail)) {
            // If they don't match, call the $fail callback with an error message
            $fail('The :attribute must match your admin registered email address.');
        }
    }
}
