<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
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
// Route::view('/', 'pages.index');
Route::get('/contact', [App\Http\Controllers\SendEmailController::class, 'index'])->name('contact');
Route::post('/contact/send', [App\Http\Controllers\SendEmailController::class, 'send'])->name('contact');

Route::view('/','index');
Route::view('/about','about');
Route::view('/services','services');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');