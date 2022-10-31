<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Account\UpdateAccountRequest;
use App\Http\Controllers\Account\Traits\SettingsOtherSessions;

class AccountController extends Controller
{
    use SettingsOtherSessions;

    /**
     * Edit user account
     *
     * @param  Request $request
     *
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $user = $request->user();

        // Load socials if enabled
        if(config('oauth.social_providers')) $user->load('socials');

        // From Trait SettingsOtherSessions
        $sessions = $this->getOtherSessions($user);

        return view('account.edit', compact('user', 'sessions'));
    }

    /**
     * Update the user's account.
     *
     * @param  UpdateAccountRequest  $request
     * @return JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function update(UpdateAccountRequest $request)
    {
        $validated = $request->validated();;
        $user = $request->user();

        // Set email_verified_at to null in case email has been changed
        if ($request->email !== $user->email && $user instanceof MustVerifyEmail)
            $validated['email_verified_at'] = null;

        $user->forceFill($validated)->save();

        if(array_key_exists('email_verified_at', $validated))
            $user->sendEmailVerificationNotification();

        $message = __('Profile successfully updated.');

        return $request->wantsJson()
            ? new JsonResponse(['message' => $message], 200)
            : back()->with('status', $message);
    }
}
