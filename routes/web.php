<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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
    return redirect('safety_registration');
});

// 使用しないルーティングも含まれるのでコメントアウト
// Auth::routes();

// 認証関連
Route::get('login', [Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [Auth\LoginController::class, 'login']);
Route::post('logout', [Auth\LoginController::class, 'logout'])->name('logout');
Route::get('register', [Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [Auth\RegisterController::class, 'register']);

// ログイン中のユーザーのみが閲覧可能なルーティング
Route::group(['middleware' => 'auth'], function () {
    Route::get('/safety_registration', [App\Http\Controllers\SafetyInformationController::class, 'create'])->name('safety_registration');
    Route::post('/store',  [App\Http\Controllers\SafetyInformationController::class, 'store'])->name('store');
    Route::get('/safety_status',  [App\Http\Controllers\SafetyInformationController::class, 'safety_status'])->name('safety_status');
});