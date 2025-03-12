<?php

use App\Http\Controllers\notifiactionController;
use Illuminate\Support\Facades\Route;

Route::get('/',[notifiactionController::class,'sendNotifications'])->name('notification.index');