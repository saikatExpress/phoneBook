<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactDetailController;

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
    Route::get('/home', [UserController::class, 'index']);
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/contact', function(){
        return view('contact');
    })->name('contact');

    //For user profile
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    //For contact
    Route::post('/create/contact', [ContactController::class, 'createContact'])->name('create.contact');
    Route::get('/edit/contact/{id}', [ContactController::class, 'showContact'])->name('edit.contact');
    Route::post('/edit/contact/{id}', [ContactController::class, 'update'])->name('update.contact');
    Route::get('/delete/contact/{id}', [ContactController::class, 'delete'])->name('delete.contact');
    Route::get('/view/contact/{id}', [ContactController::class, 'show'])->name('view.contact');

    Route::post('/contact/details/create', [ContactDetailController::class, 'contactDetailsCreate'])->name('contact.details');
});