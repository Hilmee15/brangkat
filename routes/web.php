<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebCityController;
use App\Http\Controllers\WebDestinationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Pages Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Dashboard
Route::get('/city', [WebCityController::class, 'index'])->name('city');

// Destination
Route::get('/destination', [WebDestinationController::class, 'index'])->name('destination.view'); // Destination View
Route::get('/destination/create', [WebDestinationController::class, 'viewCreate'])->name('destination.create'); // Create Destination
Route::post('/destination/create', [WebDestinationController::class, 'store'])->name('destination.store'); // Create Destination
Route::get('/destination/edit/{id}', [WebDestinationController::class, 'viewEdit'])->name('destination.edit'); // Edit Destination
Route::post('/destination/{id}', [WebDestinationController::class, 'update'])->name('destination.update'); // Update Destination
Route::get('/destination/delete/{id}', [WebDestinationController::class, 'destroy'])->name('destination.delete'); // Delete Destination

// City
Route::get('/city', [WebCityController::class, 'index'])->name('city.view'); // City View
Route::get('/city/create', [WebCityController::class, 'viewCreate'])->name('city.create'); // Create City
Route::post('/city/create', [WebCityController::class, 'store'])->name('city.store'); // Create City
Route::get('/city/edit/{id}', [WebCityController::class, 'viewEdit'])->name('city.edit'); // Edit City
Route::post('/city/{id}', [WebCityController::class, 'update'])->name('city.update'); // Update City
Route::get('/city/delete/{id}', [WebCityController::class, 'destroy'])->name('city.delete'); // Delete City
