<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


/*
* @Discription :Display a this contains all the routes for perfoming the crude
* funcitonalitid of the services.
*/



Route::get('/', [ServiceController::class,'index'])->name('services.index');
