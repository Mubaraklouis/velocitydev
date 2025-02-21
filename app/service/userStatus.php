<?php

namespace App\Service;


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

   function _contruct($users)
    {
        $this->users = $users;

    }
    /**
     * @param $user
     * @return bool
     */
    public function isOnline($user): bool
    {

        return true;


    }

}
