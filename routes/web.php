<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {

    return redirect('/dashboard');

});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/roommate/create', [DashboardController::class, 'create']);

Route::post('/roommate/store', [DashboardController::class, 'store']);

Route::get('/chat/{id}', [ChatController::class, 'index']);

Route::post('/chat/send/{id}', [ChatController::class, 'send']);

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


require __DIR__.'/auth.php';