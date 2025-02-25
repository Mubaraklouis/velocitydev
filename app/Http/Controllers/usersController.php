<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUserRequest;
use App\Models\User;
use App\Rules\MatchUserEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Validation\Rules;

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
        $users = $user->latest()->paginate(6);
        $users->toArray();
        foreach ($users as $user) {

        $timestamp = $user->last_seen;

        $time = Carbon::parse($timestamp);

        // Calculate the difference in seconds (signed difference)
        $diffInSeconds = Carbon::now()->diffInSeconds($time, false);

        // Convert seconds to minutes and take the absolute value
        $diffInMinutes = abs($diffInSeconds / 60);

        // Format to 3 decimal points
        $formattedMinutes = number_format($diffInMinutes, 3);

        // dd($formattedMinutes);

   if($user->last_seen !== null && $formattedMinutes < 1 ){
   $user->isOnline = true;
   $user->save();
   }
   else{
    $user->isOnline = false;
   $user->save();
   }
        }

        return Inertia::render(
            "users/users",
            [
                "users" => $users
            ]
        );
    }

        /*
    * Method: createUser()
    * Descriptions : returning a form for adding a new user
    * Return : vue page with form for adding a user
    *
     */

     public function createUser(){
        return Inertia::render('users/createUser');
     }

          /*
    * Method: storeUser()
    * Descriptions : store user in the database
    * Return : response with  success message if the user stored
    *
     */

     public function storeUser(storeUserRequest $request){


        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('users.index', absolute: false));

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

         //validate the user input

         //update the user information
         $user->update($request->all());
         //redirect the user
         return Redirect::route('user.edit',$id);
     }


             /**
     * Update the specific user password not noly auth user
     */
    public function updateUserPassword(Request $request,$id): RedirectResponse
    {
        //find the  user using the id


         $user = User::find($id);
        $validated = $request->validate([
            'password' => ['required','confirmed'],
        ]);

        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back();
    }


        /*
    * Method: destroy($id)
    * Descriptions :  deletes a specific user from the database
    * Return : user page
    *
     */

    public function destroy(Request $request,$id):RedirectResponse
    {



        $request->validate([
            'email' => ['required',new MatchUserEmail],
        ]);



        $user = User::find($id);

        $user->delete();

        return Redirect::route('users.index');
    }


    public function multipleDelete(Request $request){
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:users,id' // Ensure each ID exists in 'posts' table
        ]);

         // Delete records where the ID is in the given array
         User::whereIn('id', $request->ids)->delete();
        return  Redirect::back();

    }
}
