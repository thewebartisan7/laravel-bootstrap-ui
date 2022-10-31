<?php

namespace App\Rules;

trait PasswordRuleTrait
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return PasswordRule
     */
    protected function passwordRules()
    {
        return (new PasswordRule())
            ->length(8)
            ->requireUppercase()
            ->requireNumeric()
            ->requireSpecialCharacter();
    }
}
