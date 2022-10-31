<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * UpdateController
 *
 * Handle updates of currently logged-in user.
 *
 * @version 1.0
 * @since 1.0
 */
class UpdateAvatarController extends Controller
{
    /**
     * Update the user's avatar.
     *
     * @param  Request  $request
     * @return JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();

        if($request->avatar instanceof \Illuminate\Http\UploadedFile) {
            $user->updateAvatar($request->avatar);
            $message = __('Avatar updated successfully.');

        } else {
            $user->deleteAvatar();
            $message = __('Avatar deleted successfully.');
        }

        return $request->ajax()
            ? new JsonResponse(['payload' => $user->avatar_url, 'message' => $message], 200)
            : back()->with('status', $message);
    }
}
