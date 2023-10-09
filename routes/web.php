<?php
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthenticateController::class, 'index'])->name('login');
Route::post('/', [AuthenticateController::class, 'login'])->name('auth');
Route::post('/users', [UserController::class, 'store']);

Route::prefix('')->middleware('auth')->group(function() {
    Route::resource('users', UserController::class)->except('store');
    Route::post('/logout', [AuthenticateController::class, 'logout'])->name('logout');
});
