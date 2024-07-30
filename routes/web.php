<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Registration and login routes
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/create', [ComplaintController::class, 'create'])->name('complaint.create');
    Route::post('/store', [ComplaintController::class, 'store'])->name('complaint.store');
    Route::get('/list', [ComplaintController::class, 'list'])->name('complaints.list');
});

require __DIR__.'/auth.php';

