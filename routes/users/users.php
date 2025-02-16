<?php

use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;


Route::get('/',[usersController::class,'users'])->name('users.index');
Route::get('/{id}/edit',[usersController::class,'editUsers'])->name('user.edit');
Route::patch('/{id}/update',[usersController::class,'updateUser'])->name('user.update');

