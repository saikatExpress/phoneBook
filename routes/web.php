<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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
});

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::post('/home', [UserController::class, 'login'])->name('login.create');

Route::get('/registation', [UserController::class, 'registationForm']);
Route::post('/register',[UserController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function(){
        return view('home');
    });
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/contact', function(){
        return view('contact');
    })->name('contact');
    Route::post('/create/contact', [ContactController::class, 'createContact'])->name('create.contact');
});