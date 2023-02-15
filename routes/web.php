<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/auth', function () {
    return view('/auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/book',[BookController::class,'index']);
    Route::post('/book/create',[BookController::class,'create']);
    Route::get('/book/edit/{id}',[BookController::class,'edit']);
    Route::post('/book/update/{id}',[BookController::class,'update']);
    Route::get('/book/delete/{id}',[BookController::class,'delete']);
});

require __DIR__.'/auth.php';

// Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');

Route::get('book/{id}/payslip', [BookController::class, 'index'])->name('book.index');

// routes/web.php
Route::get('/notifications/data', function () {
    $notifications = Auth::user()->notifications()->latest()->get();

    return response()->json($notifications);
});

Route::get('/header', [HeaderController::class, 'index'])->name('header');

Route::get('/pesan', 'FlashMessageController@index');
Route::get('/get-pesan', 'FlashMessageController@pesan');