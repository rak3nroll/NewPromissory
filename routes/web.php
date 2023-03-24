<?php

use App\Http\Controllers\PromiController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     return view('user.login');
// });
Route::get('/',[UserController::class, 'index'])->middleware('auth');
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register',[UserController::class, 'register']);

Route::post('/login/process',[UserController::class, 'process']);

Route::post('/store_user',[UserController::class, 'store_user']);
Route::post('/logout',[UserController::class, 'logout']);

Route::get('/add_promi',[PromiController::class, 'create_promi']);
Route::post('/add_promi',[PromiController::class, 'store_promi']);

Route::get('/promisorry/{id}',[PromiController::class, 'show_promi']);