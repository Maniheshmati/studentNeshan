<?php

use App\Http\Controllers\NewsController;
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
})->name('home');

Route::get('/login', function (){
    return view('login');
})->name('login');
Route::get('/register', function (){
    return view('auth.register');
})->name('register');



// Route::get('/explore', [NewsController::class, 'showExplore'])->name('explore');
Route::get('/explore', function (){
    return view('explore');
})->name('explore');



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
