<?php

use App\Http\Controllers\GameRpcController;
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
Route::get('/join', fn() => view('welcome'));
Route::get('/join', fn() => view('welcome'));
Route::get('/createjoin', fn() => view('welcome'));
Route::get('/create', fn() => view('welcome'));

// RPC calls
Route::post('/login-rpc/login', [LoginRpcController::class, 'login']);
Route::post('/login-rpc/check', [LoginRpcController::class, 'check']);
Route::post('/game-rpc/get-code', [GameRpcController::class, 'getCode']);
Route::post('/game-rpc/start', [GameRpcController::class, 'start']);
Route::post('/game-rpc/join', [GameRpcController::class, 'join']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
