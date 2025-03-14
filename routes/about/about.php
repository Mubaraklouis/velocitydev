<?php

use App\Http\Controllers\aboutController;
use Illuminate\Support\Facades\Route;

Route::get('/',[aboutController::class,'aboutPage'])->name('about.index');