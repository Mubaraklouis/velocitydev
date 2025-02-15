<?php

use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;


Route::get('/',[usersController::class,'users'])->name('users.index');


