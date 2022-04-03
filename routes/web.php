<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/safety_registration', [App\Http\Controllers\SafetyInformationController::class, 'add'])->name('safety_registration');
Route::post('/store',  [App\Http\Controllers\SafetyInformationController::class, 'store'])->name('store');
Route::get('/safety_status',  [App\Http\Controllers\SafetyInformationController::class, 'safety_status'])->name('safety_status');
