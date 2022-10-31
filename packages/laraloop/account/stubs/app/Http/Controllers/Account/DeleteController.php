<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
//use Laraloop\App\Events\AccountDeleted;

class DeleteController extends Controller
{
    /**
     * Delete the user.
     *
     * @param  Request $request
     *
     * @return JsonResponse|\Illuminate\Http\RedirectResponse
     *
     * @throws ValidationException
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();

        if (!Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'password' => [__('This password does not match our records.')],
            ]);
        }

        //$user->sendAccountDeletedNotification(now()->addMonth(), $request->get('reason'));

        DB::transaction(function () use ($user) {
            //$user->socials()->delete();
            $user->delete();
        });

        //event(new AccountDeleted($user));

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $data['message'] = __('Account successfully deleted.');
        $data['redirect'] = '/';

        return $request->wantsJson()
            ? new JsonResponse($data, 200)
            : redirect($data['redirect'])->with('status', $data['message']);
    }
}
