<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/dashboard', function () {
    return view('layouts.main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['App\Http\Middleware\Check'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::post('/active/{role}', [RoleController::class, 'active'])->name('active');
});

Route::middleware(['App\Http\Middleware\Check'])->group(function () {
    Route::resource('students', StudentController::class);
});

Route::middleware(['App\Http\Middleware\Check'])->group(function () {
    Route::resource('cars', CarController::class);
});

Route::middleware(['App\Http\Middleware\Check'])->group(function () {
    Route::resource('posts', PostController::class);
});
