<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\OrganisatorController;
use App\Http\Controllers\RegisterControl;
use App\Http\Controllers\UserController;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
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
// Route::post("/subscribe", [NewsLetterController::class, 'subscribe'])->name("subscribe");
Route::post("/register", [RegisterControl::class, 'registerUser'])->name("register");
Route::post("/login", [UserController::class, 'login'])->name("login");
Route::post("/forgotPassword", [ForgotPasswordController::class, 'store'])->name("forgotPassword");

Route::post('passwordReset/{token}', [ForgotPasswordController::class, 'reset'])->name('password.reset');
Route::get('passwordReset/{token}', [ForgotPasswordController::class, 'init']);


// organiser actions
Route::get('/newEvent', [OrganisatorController::class, 'newEvent']);
Route::get('/ograniserStatistics', [OrganisatorController::class, 'ograniserStatistics'])->name("ograniserStatistics");
Route::get('/organiser', [OrganisatorController::class, 'organiser'])->name("organiser");
Route::post('/organisator', [OrganisatorController::class, 'createEvent'])->name("create_event");
Route::get('/acceptBooking/{id}', [EventsController::class, 'booking'])->name("booking");

// events routes
Route::get('/manageEvents', [OrganisatorController::class, 'manageEventsView'])->name("manageEventsView");
Route::get('/eventDetails/{id}', [EventsController::class, 'eventDetails'])->name("eventDetails");
Route::delete('/eventDetails/{id}', [EventsController::class, 'deleteEvent'])->name("deleteEvent");
Route::put('/eventDetails/{id}', [EventsController::class, 'editEvent'])->name("editEvent");

// ADMIN ACTIONS
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'adminDashboard'])->name("adminDashboard");
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
});
// admin to categories

// USER book
Route::get('/booking/{id}', [EventsController::class, 'autoBooking'])->name("booking");
Route::get('/bookNow/{id}', [EventsController::class, 'bookNow'])->name("bookNow");
Route::get('/accpetBooking/{id}', [EventsController::class, 'accpetBooking'])->name("accpetBooking");
