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

// Route::get('/', function () {
//     //return env('CREATOR_NAME');
//     return view('home');
// });

//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register']);
Route::get('/landing', [App\Http\Controllers\LoginController::class, 'login ($request)']);


Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::get('/', [App\Http\Controllers\RegisterController::class, 'home']);

Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store']);