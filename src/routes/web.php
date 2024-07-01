<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StampController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\RegisteredUserController;


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

Route::get('/', [StampController::class, 'index'])
->name('stamp');

Route::get('/attendance', [AttendanceController::class, 'index']);


Route::get('/login', [AuthenticatedSessionController::class, 'index'])
->name('index');
Route::post('login', [AuthenticatedSessionController::class, 'login'])
->name('login');
Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])
->middleware('auth')
->name('logout.get');
Route::post('logout', [AuthenticatedSessionController::class, 'logout'])
->name('logout.post');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [StampController::class, 'index'])
    ->name('stamp');
});


Route::get('/register', [RegisteredUserController::class, 'create'])
->name('register.get');
Route::post('register', [RegisteredUserController::class, 'store'])
->name('register.post');

