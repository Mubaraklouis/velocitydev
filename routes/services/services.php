<?php
use Illuminate\Support\Facades\Route;


/*
* @Discription :Display a this contains all the routes for perfoming the crude
* funcitonalitid of the services.
*/



Route::get('/services', 'ServiceController@index')->name('services.index');
