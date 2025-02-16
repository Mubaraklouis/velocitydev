<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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



    /*
    * Method: editUser($id)
    * Descriptions : Returns all the users from the database
    * Return : vue page with users as prop
    *
     */


     public function editUsers(User $user,$id)
     {
         $user = $user->find($id);


         return Inertia::render(
             "users/Edit",
             [
                 "user" => $user
             ]
         );
     }


    /*
    * Method: updateUser($id)
    * Descriptions : Returns all the users from the database
    * Return : vue page with users as prop
    *
     */


     public function updateUser(User $user,$id,Request $request)
     {
         $user = $user->find($id);

         //update the user information
         $user->update($request->all());
         //redirect the user
         return Redirect::route('user.edit',$id);
     }
}
