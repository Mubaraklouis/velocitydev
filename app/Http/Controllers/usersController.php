<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class usersController extends Controller
{
    /*
    * Method: users()
    * Descriptions : Returns all the users from the database
    * Return : vue page with users as prop
    *
     */


    public function users(User $user)
    {
        $users = $user->paginate(6);
        $users->toArray();

        return Inertia::render(
            "users/users",
            [
                "users" => $users
            ]
        );
    }
}
