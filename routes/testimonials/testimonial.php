<?php

use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/create',[TestimonialController::class,'show'])->name('testimonial.show');
Route::post('/store',[TestimonialController::class,'store'])->name('testimonial.store');
