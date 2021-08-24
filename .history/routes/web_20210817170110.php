<?php

use App\Http\Controllers\inventoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/comanda', function () {
    return view('Comanda');
});

Route::resource('gusturi','App\Http\Controllers\ComandaController');

Route::get('list',[inventoryController::class,'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
