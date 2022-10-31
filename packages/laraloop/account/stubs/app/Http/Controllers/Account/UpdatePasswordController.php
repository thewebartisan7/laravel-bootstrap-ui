<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\UpdatePasswordRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

/**
 * UpdateController
 *
 * Handle updates of currently logged-in user.
 *
 * @version 1.0
 * @since 1.0
 */
class UpdatePasswordController extends Controller
{
    /**
     * Update the user's password.
     *
     * @param  UpdatePasswordRequest $request
     *
     * @return JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function __invoke(UpdatePasswordRequest $request)
    {
        $validated = $request->validated();

        // Update
        $request->user()->forceFill([
            'password' => Hash::make($validated['password']),
        ])->save();

        $message = __('Password successfully updated.');

        return $request->wantsJson()
            ? new JsonResponse(['message' => $message], 200)
            : back()->with('status', $message);
    }
}
