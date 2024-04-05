<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,

//     ]);
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/itinerary', function () {
    return Inertia::render('Itinerary');
})->name('itinerary');

Route::get('/hotel', function () {
    return Inertia::render('Hotel');
})->name('hotel');



Route::get('/flight-details', function () {
    return Inertia::render('Flights-Details');
})->name('flight-details');


Route::get('/custom-login', function () {
    return Inertia::render('CustomProfile/Login');
})->name('login');

Route::get('/custom-register', function () {
    return Inertia::render('CustomProfile/Register');
})->name('custom-register');

Route::get('/verfication-code', function () {
    return Inertia::render('CustomProfile/VerficationCode');
})->name('verfication-code');

Route::get('/booking-details', function () {
    return Inertia::render('CustomProfile/Booking-Details');
})->name('booking-details');

Route::get('/booking-details1', function () {
    return Inertia::render('CustomProfile/Booking-Details1');
})->name('booking-details1');
Route::get('/booking-details2', function () {
    return Inertia::render('CustomProfile/Booking-Details2');
})->name('booking-details2');

Route::post('/process_payment', [PaymentController::class, 'store']);







require __DIR__.'/auth.php';
