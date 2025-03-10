<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/change',[ProfileController::class,'changeProfile'])->name('profile.change');
});



/*
* prefix(users) => users is added to all routes that belongs to user crude operation
* method => performing all the user crude
*/

Route::prefix('dashboard/users')->middleware(['auth'])->group(function(){
 require __DIR__ ."/users/users.php";
});

/*
* prefix(services) => service is added to all routes that belongs to services crude operation
* method => performing all the services crude
*/


Route::prefix('dashboard/services')->middleware(['auth'])->group(function(){
    require __DIR__ ."/services/services.php";
   });




/*
* prefix(services) => return the list of services to the client side
* method => performing all the services crude
*/
Route::prefix('/services')->group(function(){
    require __DIR__ ."/services/client/services.php";
   });

   /*
* prefix(contacts) => this contact routes that belongs to contact featur
* method => performing all the contact crude
*/
Route::prefix('dashboard/contacts')->group(function(){
    require __DIR__ ."/contact/contacts.php";
   });


require __DIR__.'/auth.php';
