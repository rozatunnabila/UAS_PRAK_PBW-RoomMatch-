<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatController;


Route::get('/', function () {

    return redirect('/login');

});


Route::get('/logout-manual', function () {

    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/login');

});


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/roommate/create', [DashboardController::class, 'create'])
    ->middleware(['auth']);

Route::post('/roommate/store', [DashboardController::class, 'store'])
    ->middleware(['auth']);

Route::get('/chat/{id}', [ChatController::class, 'index'])
    ->middleware(['auth']);

Route::post('/chat/send/{id}', [ChatController::class, 'send'])
    ->middleware(['auth']);

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


require __DIR__.'/auth.php';