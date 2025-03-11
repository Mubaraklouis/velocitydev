<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class,'index'])->name('contact.index');
Route::post('/', [ContactController::class,'store'])->name('contact.store');
Route::put('/', [ContactController::class,'store'])->name('contact.update');


