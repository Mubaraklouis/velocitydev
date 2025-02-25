<?php

/*
* @Discription :Display all the services from the database on the client side
* @return : mixed
*
*/

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ServiceController::class,'services'])->name('client.services');
