<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookedTourController;
use App\Http\Controllers\JoinerController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
})->name('home');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/signin', function () {
    return view('signin');
})->name('sign_in');

Route::get('/login', function () {
    return view('signin');
})->name('log_in');

Route::get('/destinations', function () {
    return view('destinations');
})->name('tour_places');

Route::get('/booktour', function () {
    return view('book-tour');
})->middleware(['auth'])->name('book_tour');

Route::get('/tours', [BookedTourController::class, 'index'])->middleware(['auth'])->name('tour_history');

Route::post('/joiner/signup', [JoinerController::class, 'store'])->name('sign_up');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/book/tour', [BookedTourController::class, 'store'])->name('booktour');

Route::get('/tour/edit/{id}', [BookedTourController::class, 'edit'])->name('edit_tour');
Route::put('/tour/update/{id}', [BookedTourController::class, 'update'])->name('update_tour');

Route::get('/tour/view/{id}', [BookedTourController::class, 'show'])->name('view_tour');

Route::delete('/tour/delete/{booked_tour}', [BookedTourController::class, 'destroy'])->name('delete_tour');

Route::post('/logout', [LoginController::class, 'logout'])->middleware(['auth'])->name('logout');