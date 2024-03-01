<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GugatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermohonanController;

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

Route::group(['middleware'=>'guest'], function() {
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
  
});

Route::group(['middleware'=>'auth'], function(){
  Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

  Route::resource('gugatan', GugatanController::class);
  Route::resource('permohonan', PermohonanController::class);
});

