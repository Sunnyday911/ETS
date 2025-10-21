<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Models\Animal;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer', [CustomerController::class, 'index' ])->name('Customer');

Route::get('/animal', [AnimalController::class, 'index' ])->name('Animal');

Route::get('/service', [ServiceController::class, 'create' ])->name('servicee.create');

Route::get('/history', [ServiceController::class, 'history' ])->name('history');

Route::get('/customer/create', [CustomerController::class, 'create'])->name('create');

Route::get('/animal/create', [AnimalController::class, 'create'])->name('createan');

Route::get('/customer/{customer}', [CustomerController::class, 'more'])->name('more');

Route::get('/animal/{animal}', [AnimalController::class, 'morean'])->name('morean');

Route::get('/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');

Route::put('/customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');

Route::get('/animal/{animal}/edit', [AnimalController::class, 'edit'])->name('animal.edit');

Route::put('/animal/{animal}', [AnimalController::class, 'update'])->name('animal.update');

Route::post('/customer', [CustomerController::class, 'store'])->name('store');

Route::post('/animal', [AnimalController::class, 'store'])->name('storean');

Route::post('/service/grooming/store', [ServiceController::class, 'storeGrooming'])->name('grooming.store');

Route::post('/service/clinic/store', [ServiceController::class, 'storeClinic'])->name('clinic.store');

Route::get('/service/grooming/create/{animal}', [ServiceController::class, 'createGroom'])->name('grooming.create');

Route::get('/service/clinic/create/{animal}', [ServiceController::class, 'createClinic'])->name('clinic.create');

Route::post('/service/redirect', [ServiceController::class, 'redirect'])->name('service.redirect');

Route::delete('/customer/{customer}', [CustomerController::class, 'destroy'])->name('destroy');

Route::delete('/animal/{animal}', [AnimalController::class, 'destroy'])->name('anim.destroy');









