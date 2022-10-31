<?php

namespace App\Http\Requests\Account;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class BaseRequest
 *
 * Handle create or update User.
 */
class UpdateAccountRequest extends FormRequest
{
  /**
   * The key to be used for the view error bag.
   *
   * @var string
   */
  protected $errorBag = 'updateAccount';

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    $unique = Rule::unique('users');
    $unique->ignore($this->user()->id);

    return [
      // Name
      'name' => [
        'required',
        'string',
        'min:3',
        'max:255'
      ],

      // Email
      'email' => [
        'required',
        'string',
        'email',
        'max:255',
        $unique
      ],
    ];
  }
}
