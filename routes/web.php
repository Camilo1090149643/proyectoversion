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
Route::post('/login-two-factor/{user}', 'Auth\LoginController@login2FA')->name('login.2fa');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
