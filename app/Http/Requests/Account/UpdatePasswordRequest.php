<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\Rules\PasswordRuleTrait;

/**
 * Class UpdatePassword
 *
 * Handle create or update User.
 */
class UpdatePasswordRequest extends FormRequest
{
    use PasswordRuleTrait;

    /**
     * The key to be used for the view error bag.
     *
     * @var string
     */
    protected $errorBag = 'updatePassword';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // Current password
            'current_password' => [
                'required',
                'string'
            ],

            // Password
            'password' => [
                'required',
                'string',
                $this->passwordRules(),
                'confirmed'
            ],
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!Hash::check($this->get('current_password'), $this->user()->password)) {
                $validator->errors()->add(
                    'current_password',
                    __('The provided password does not match your current password.')
                );
            }
        });
    }
}
