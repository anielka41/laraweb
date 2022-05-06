<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});

Route::middleware(['auth', 'verified'])->group(function () {

    // (Dashboard) URI: admin
    Route::get('/admin', [HomeController::class, 'index'])->name('admin');

    // (Users) URI: admin/users
    Route::prefix('admin')->group(function () {
        Route::resource('users', UserController::class)->names('users');
    });

});


Auth::routes(['verify' => true]);