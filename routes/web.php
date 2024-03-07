<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\OrganisatorController;
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

Route::get('/forgotPassword', function () {
    return view('forgotPassword');
});




Route::post('/logout', [Logoutcontroller::class, 'destroy'])->name("logout");
Route::post("/subscribe", [NewsLetterController::class, 'subscribe'])->name("subscribe");
Route::post("/register", [RegisterControl::class, 'registerUser'])->name("register");
Route::post("/login", [UserController::class, 'login'])->name("login");
Route::post("/forgotPassword", [ForgotPasswordController::class, 'store'])->name("forgotPassword");

Route::post('passwordReset/{token}', [ForgotPasswordController::class, 'reset'])->name('password.reset');
Route::get('passwordReset/{token}', [ForgotPasswordController::class, 'init']);


// THIS IS WHERE GET methods for organiser ACTIONS AND ROUTES GO
Route::get('/organisator', [OrganisatorController::class, 'newEvent']);
Route::get('/ograniserStatistics', [OrganisatorController::class, 'ograniserStatistics'])->name("ograniserStatistics");

// THIS IS WHERE POST methods for organiser ACTIONS AND ROUTES GO
Route::post('/organisator', [OrganisatorController::class, 'createEvent'])->name("create_event");

// events routes
Route::get('/manageEvents', [OrganisatorController::class, 'manageEventsView'])->name("manageEventsView");
Route::get('/eventDetails/{id}', [EventsController::class, 'eventDetails'])->name("eventDetails");
Route::delete('/eventDetails/{id}', [EventsController::class, 'deleteEvent'])->name("deleteEvent");
Route::put('/eventDetails/{id}', [EventsController::class, 'editEvent'])->name("editEvent");