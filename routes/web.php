<?php

use App\Http\Controllers\PromiController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('user.login');
});
//Route::get('/',[UserController::class, 'index'])->middleware('auth');
// Auth::route();
Auth::routes();

//Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register',[UserController::class, 'register']);

Route::post('/login/signin',[UserController::class, 'signin']);

Route::post('/store_user',[UserController::class, 'store_user']);
Route::post('/logout',[UserController::class, 'logout']);

Route::get('/add_promi',[PromiController::class, 'create_promi']);
Route::post('/add_promi',[PromiController::class, 'store_promi']);

Route::get('/promisorry_{id}',[PromiController::class, 'show_promi']);

Auth::routes();

Route::middleware(['auth','user-role:user'])->group(function(){
    Route::get("/user/home",[UserController::class, 'userIndex'])->name('user.index');
});

Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get("/admin/home",[UserController::class, 'adminIndex'])->name('admin.index');    
});

// Route::middleware(['auth','user-role:verifier'])->group(function(){
//     Route::get('/verifier/index',[UserController::class, 'verifierIndex'])->name('verifier.index');
// });

// Route::middleware(['auth','user-role:approver'])->group(function(){
//     Route::get('/approver/index',[UserController::class, 'approverIndex'])->name('approver.index');
// });

// Route::middleware(['auth','user-role:billing_user'])->group(function(){
//     Route::get('/billing_user/index',[UserController::class, 'billing_userIndex'])->name('billing_user.index');
// });

