<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LogoutFromOtherSessions extends Controller
{
    /**
     * Logout from other browser sessions.
     *
     * @param Request $request
     *
     * @return void|JsonResponse|\Illuminate\Http\RedirectResponse
     *
     * @throws ValidationException
     */
    public function __invoke(Request $request)
    {
        if (!Hash::check($request->password, $request->user()->password)) {
            throw ValidationException::withMessages([
                'password' => [__('This password does not match our records.')],
            ]);
        }

        Auth::logoutOtherDevices($request->password);

        if (config('session.driver') !== 'database') {
            return;
        }

        DB::table('sessions')
            ->where('user_id', $request->user()->getKey())
            ->where('id', '!=', $request->session()->getId())
            ->delete();

        $message = __('Other browser sessions logged out successfully');

        return $request->wantsJson()
            ? new JsonResponse(['message' => $message], 200)
            : back()->with('status', $message);
    }
}
