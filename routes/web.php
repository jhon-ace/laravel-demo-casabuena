<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('hi', function() {
    return view('mypages.index');
})->name('index');
Route::get('gallery', function() {
    return view('mypages.gallery');
})->name('gallery');

//calling views through controller
Route::get('calculator', [CalculatorController::class, 'showBlade']);
Route::post('addcalculator', [CalculatorController::class, 'displaySum'])->name('calculate');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
