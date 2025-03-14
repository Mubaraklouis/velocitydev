<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\settingController;
use Illuminate\Support\Facades\Route;

Route::get('/about',[settingController::class,'aboutForm'])->name('about.create');
Route::post('/about',[aboutController::class,'addAbout'])->name('about.store');
Route::get('/about/edit',[settingController::class,'EditaboutForm'])->name('about.edit');
Route::put('/about/update',[aboutController::class,'updateAbout'])->name('about.update');
Route::delete('/about/delete',[aboutController::class,'delete'])->name('about.delete');
