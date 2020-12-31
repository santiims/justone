<?php

use App\Http\Controllers\LoginRpcController;
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

// YOLO
// Route::any('{all}', fn() => view('welcome'))->where(['all' => '.*']);

// All routes return the same view because routing actually happens in frontend
Route::get('/', fn() => view('welcome'));
Route::get('/info', fn() => view('welcome'));
Route::get('/login', fn() => view('welcome'));

// These routes are for development only. They should stay commented out in production
//Route::get('/createjoin', fn() => view('welcome'));

// RPC calls
Route::post('/login-rpc', [LoginRpcController::class, 'login']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
