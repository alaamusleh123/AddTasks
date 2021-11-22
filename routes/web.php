<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
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

Route::resource('task',TaskController::class)->middleware('auth');



Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/layout', function () {
    return view('home');
});

//Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
//Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
//
//Route::get('/login', [LoginController::class, 'create'])->middleware('guest');
//Route::post('/login', [LoginController::class, 'store'])->middleware('guest');


//Route::post('/logout', [LoginController::class, 'destroy']);




