<?php

use App\Http\Controllers\CustomerAuthController;
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
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/login', [CustomerAuthController::class, 'login'])->name('login');
Route::post('/login-submit', [CustomerAuthController::class, 'login_submit'])->name('login_submit');
Route::get('/registration', [CustomerAuthController::class, 'registration'])->name('registration');
Route::get('/logout', [CustomerAuthController::class, 'logout'])->name('logout');
Route::post('/registration-submit', [CustomerAuthController::class, 'registration_submit'])->name('registration_submit');
Route::post('/book-submit', [CustomerAuthController::class, 'book_submit'])->name('book_submit');


Route::get('/book-trip', function () {
    return view('book_trip');
})->name('book_trip');