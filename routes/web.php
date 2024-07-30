<?php
use App\Http\Controllers\ComplaintController;

Route::get('/', [ComplaintController::class, 'index'])->name('home');
Route::get('/create', [ComplaintController::class, 'create'])->name('complaint.create');
Route::post('/store', [ComplaintController::class, 'store'])->name('complaint.store');
Route::get('/complaints', [ComplaintController::class, 'list'])->name('complaints.list');
