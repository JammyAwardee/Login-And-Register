<?php

use App\Http\Controllers\BarangayOfficialsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseholdsController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentsController;
use App\Http\Controllers\UserController;
use App\Models\Log;
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

    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

    Route::post('/update-profile', [HomeController::class, 'updateProfile'])->name('update-profile');

    Route::post('/update-password', [HomeController::class, 'updatePassword'])->name('update-password');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/users', [UserController::class, 'index']);
    
    Route::get('/users/create', [UserController::class, 'create']);

    Route::post('/users', [UserController::class, 'store']);

    Route::get('/users/{user}/edit', [UserController::class, 'useredit']);

    Route::put('/users/{user}', [UserController::class, 'userprofilestore']);

    Route::delete('/users/{user}', [UserController::class, 'destroy']);

    Route::put('/users/{user}/password', [UserController::class, 'userpasswordstore']);
    
    Route::get('/logs', [LogController::class, 'index']);

});
  
/*------------------------------------------
--------------------------------------------
All Officials Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:official'])->group(function () {
    
    Route::get('/official/home', [HomeController::class, 'officialHome'])->name('official.home');
    
    Route::get('/official/profile', [HomeController::class, 'officialProfile'])->name('official-profile');
    
    Route::post('/official/update-profile', [HomeController::class, 'updateOfficialProfile'])->name('official-update-profile');
    
    Route::post('/official/update-password', [HomeController::class, 'updateOfficialPassword'])->name('official-update-password');
   
    Route::get('/residents', [ResidentsController::class, 'index'])->name('residents');
    
    Route::get('/households', [HouseholdsController::class, 'index'])->name('households');
    
    Route::get('/households/create', [HouseholdsController::class, 'create']);
    
    Route::post('/households/store', [HouseholdsController::class, 'store']);

    Route::get('/households/{household}/edit', [HouseholdsController::class, 'edit']);

    Route::put('/households/{household}', [HouseholdsController::class, 'update']);

    Route::delete('/households/{household}', [HouseholdsController::class, 'destroy']);

    Route::get('/officials', [BarangayOfficialsController::class, 'index'])->name('officials');

    Route::post('/officials/search', [BarangayOfficialsController::class, 'search']);

    Route::get('/officials/create', [BarangayOfficialsController::class, 'create']);

    Route::post('/officials/store', [BarangayOfficialsController::class, 'store']);

    Route::post('/officials/add-official-search', [BarangayOfficialsController::class, 'addofficialsearch']);

    Route::post('/officials/createidhelper', [BarangayOfficialsController::class, 'createidhelper']);

});

