<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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
});

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard',[DashboardController::class,'show'])->name('dashboard');
 });
 Route::post('/login',[AuthController::class,'auth'])->name('authenticate');
Route::get('/homeland',[AuthController::class,'coUser'])->name('homeland');
Route::post('/logout',[AuthController::class,'destroy'])->name('logout');
