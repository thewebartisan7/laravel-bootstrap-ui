<?php

namespace App\Http\Controllers\Account\Traits;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

trait SettingsOtherSessions
{
    /**
     * Get the other user sessions.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function getOtherSessions($user)
    {
        if (config('session.driver') !== 'database') {
            return collect();
        }

        return collect(
            DB::table('sessions')
                ->where('user_id', $user->getKey())
                ->orderBy('last_activity', 'desc')
                ->get()
        )->map(function ($session) {
            return (object) [
                'agent' => $this->createAgent($session),
                'ip_address' => $session->ip_address,
                'is_current_device' => $session->id === request()->session()->getId(),
                'last_active' => Carbon::createFromTimestamp($session->last_activity)->diffForHumans(),
            ];
        });
    }

    /**
     * Create a new agent instance from the given session.
     *
     * @param  mixed  $session
     * @return \Jenssegers\Agent\Agent
     */
    protected function createAgent($session)
    {
        return tap(new Agent, function ($agent) use ($session) {
            $agent->setUserAgent($session->user_agent);
        });
    }
}
