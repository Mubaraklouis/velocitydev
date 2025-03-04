<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


/*
* @Discription :Display a this contains all the routes for perfoming the crude
* funcitonalitid of the services.
*/



Route::get('/', [ServiceController::class,'index'])->name('services.index');
Route::get('/service-create', [ServiceController::class,'ceateService'])->name('services.create');
Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');
Route::get('/service/edit/{id}',[ServiceController::class,'editService'])->name('service.edit');
Route::put('/service/update/{id}',[ServiceController::class,'updateService'])->name('service.update');
Route::delete('/service/delete/{id}',[ServiceController::class,'deleteService'])->name('service.delete');


