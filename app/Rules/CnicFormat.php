<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CnicFormat implements Rule
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
        // Remove any non-digit characters
        $cnic = preg_replace('/[^0-9]/', '', $value);

        // Check if the length of the CNIC is 15 and matches the specified format
        return strlen($cnic) === 13 && preg_match('/^\d{5}-\d{7}-\d{1}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be in the format XXXXX-XXXXXXX-X.';
    }
}
