<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contacts', [ContactController::class,'index'])->name('contact.index');
Route::post('/contacts', [ContactController::class,'store'])->name('contact.store');


