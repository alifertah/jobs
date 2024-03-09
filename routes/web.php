<?php

use App\Http\Controllers\AdminController;
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

// ADMIN ACTIONS
Route::get('/admin', [AdminController::class, 'adminDashboard'])->name("adminDashboard");
// admin to categories
Route::get('/manageCategories', [AdminController::class, 'manageCategories'])->name("manageCategories");
Route::post('/manageCategories', [AdminController::class, 'newCategory'])->name("newCategory");
Route::delete('/manageCategories/{id}', [AdminController::class, 'deleteCategory'])->name("deleteCategory");
Route::put('/manageCategories/{id}', [AdminController::class, 'editCategory'])->name("editCategory");
// admin to users 
Route::delete('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name("deleteUser");
Route::put('/editUser/{id}', [AdminController::class, 'editUserPerssion'])->name("editUserPerssion");
// admin to events 
Route::post('/acceptEvent/{id}', [AdminController::class, 'acceptEvent'])->name("acceptEvent");
Route::delete('/rejectEvent/{id}', [AdminController::class, 'rejectEvent'])->name("rejectEvent");
