<?php

use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/newsletter',[NewsletterController::class,'index'])->name('newsletter.index');
Route::post('/subscribe',[NewsletterController::class,'subscribe'])->name('newsletter.subscribe');
