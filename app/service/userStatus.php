<?php

namespace App\Service;

use Carbon\Carbon;

/*
*
* @Desicription:This class is used to check the status of the user
*/

class UserStatus
{

    public $users;
    /**
     * @param $users
     */

    function __construct($users)
    {
        $this->users = $users;
    }
    /**
     * @param $user
     * @return bool
     */
    public function isOnline($user): bool
    {

        foreach ($this->users as $user) {

            $timestamp = $user->last_seen;
//get the time from the user
            $time = Carbon::parse($timestamp);

            // Calculate the difference in seconds from the current time (signed difference)
            $diffInSeconds = Carbon::now()->diffInSeconds($time, false);

            // Convert seconds to minutes and take the absolute value
            $diffInMinutes = abs($diffInSeconds / 60);

            // Format to 3 decimal points
            $formattedMinutes = number_format($diffInMinutes, 3);

            // dd($formattedMinutes);

            if ($user->last_seen !== null && $formattedMinutes < 1) {
                $user->isOnline = true;
                $user->save();
            } else {
                $user->isOnline = false;
                $user->save();
            }

            return true;
        }
    }
}
