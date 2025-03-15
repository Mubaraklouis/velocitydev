<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


/*
* @Discription :Display a this contains all the routes for perfoming the crude
* funcitonalitid of the portfolio projects.
*/



Route::get('/',[PortfolioController::class,'viewProjects'])->name('project.index');
Route::get('/portfolio-create', [PortfolioController::class,'create'])->name('portfolio.create');
Route::post('/portfolio/store',[PortfolioController ::class,'store'])->name('portfolio.store');
Route::get('/edit/{id}',[PortfolioController::class,'edit'])->name('portfolio.edit');
Route::put('/update/{id}',[PortfolioController::class,'update'])->name('portfolio.update');
Route::delete('/delete/{id}',[PortfolioController::class,'delete'])->name('portfolio.delete');
Route::post('/multiple-delete',[PortfolioController::class,'multipleDelete'])->name('portfolio.multipleDelete');


