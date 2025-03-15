<?php

/*
* @Discription :Display all the projects from the database on the client side
* @return : mixed
*
*/

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class,'index'])->name('portfolio.index');
