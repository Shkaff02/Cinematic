<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::get('/cinemaUpdate/{cinema_id}', 'App\Http\Controllers\MainController@cinemaUpdate')->name('cinemaUpdate');

Route::get('/seanceDateUpdate/{seance_date}', 'App\Http\Controllers\MainController@seanceDateUpdate')->name('seanceDateUpdate');

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/soon', 'App\Http\Controllers\MainController@home')->name('soon');

Route::get('/cinemas', 'App\Http\Controllers\MainController@cinemas')->name('cinemas');

Route::get('/about', 'App\Http\Controllers\MainController@about')->name('about');

Route::get('/faq', 'App\Http\Controllers\MainController@faq')->name('faq');

Route::get('/film/{film_id}', 'App\Http\Controllers\MainController@film')->name('film');
Route::post('/rating-update', 'App\Http\Controllers\RatingController@ratingUpdate')->name('ratingUpdate');

Route::get('/seance/{seance_id}', 'App\Http\Controllers\MainController@seance')->name('seance');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/custom-registration', [AuthController::class, 'customRegistration'])->name('registration.custom');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('/tickets', 'App\Http\Controllers\MainController@tickets')->name('tickets');

Route::get('/profile', 'App\Http\Controllers\MainController@profile')->name('profile');
