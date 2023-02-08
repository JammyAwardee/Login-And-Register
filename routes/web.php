<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/users/profile', [ProfileController::class, 'profile']);
    
    Route::patch('/users/profile', [ProfileController::class, 'update']);
    
    Route::delete('/users/profile', [ProfileController::class, 'delete']);
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    // Route::get('/admin/profile', [ProfileController::class, 'profile'])->name('profile.edit');

    // Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Route::delete('/admin/profile', [ProfileController::class, 'delete'])->name('profile.destroy');
});
  
/*------------------------------------------
--------------------------------------------
All Officials Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:official'])->group(function () {
  
    Route::get('/official/home', [HomeController::class, 'officialHome'])->name('official.home');

    // Route::get('/users', [UserController::class, 'allusers']);

    // Route::get('/users/{id}', [UserController::class, 'show']);

    // Route::patch('/users/{id}', [UserController::class, 'edit']);

    // Route::delete('/users/{id}', [UserController::class, 'delete']);
});

