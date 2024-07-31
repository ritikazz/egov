<?php

use App\Http\Controllers\Auth\ProfileController;
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



Route::middleware('auth')->group(function () {
    Route::get('/create', [ComplaintController::class, 'create'])->name('complaint.create');
    Route::post('/store', [ComplaintController::class, 'store'])->name('complaint.store');
    Route::get('/list', [ComplaintController::class, 'list'])->name('complaints.list');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});
require __DIR__.'/auth.php';

