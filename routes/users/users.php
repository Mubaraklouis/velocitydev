<?php

use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;


Route::get('/',[usersController::class,'users'])->name('users.index');
Route::get('/{id}/edit',[usersController::class,'editUsers'])->name('user.edit');
Route::patch('/{id}/update',[usersController::class,'updateUser'])->name('user.update');
Route::patch('/{id}/password/update',[usersController::class,'updateUserPassword'])->name('user.update.password');
Route::delete('/{id}/delete',[usersController::class,'destroy'])->name('user.delete');

