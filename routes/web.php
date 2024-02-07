<?php

use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\RegisterControl;
use App\Http\Controllers\UserController;
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

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post("/subscribe", [NewsLetterController::class, 'subscribe'])->name("subscribe");
Route::post("/register", [RegisterControl::class, 'registerUser'])->name("register");
Route::post("/login", [UserController::class, 'login'])->name("login");