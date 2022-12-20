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


// Home Controllers
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register']);
//Route::post('/', [App\Http\Controllers\HomeController::class, 'login']);

// Login Controllers
//Route::get('/landing', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/', [App\Http\Controllers\LoginController::class, 'login']);

// Seller Controllers
Route::get('/seller', [App\Http\Controllers\SellerController::class, 'index']);

// Buyer Controllers
Route::get('/buyer', [App\Http\Controllers\BuyerController::class, 'index']);

// Register controllers
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store']);

// Logout controllers
Route::post('/landing', [App\Http\Controllers\LogoutController::class, 'logout']);

//Profile update controllers
Route::post('/update', [App\Http\Controllers\ProfileUpdateController::class, 'update']);
Route::get('/update', [App\Http\Controllers\ProfileUpdateController::class, 'index']);