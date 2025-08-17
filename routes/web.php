<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenerimaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Penerimaan
    Route::get('/penerimaan',[PenerimaanController::class,'index'])->name('penerimaan_index');
    Route::get('/penerimaan-create',[PenerimaanController::class,'create'])->name('penerimaan_create');
    Route::get('/penerimaan-create/getJsonSupplier/{id}',[PenerimaanController::class,'jsonSupplier']);
});

require __DIR__.'/auth.php';
