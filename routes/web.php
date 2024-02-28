<?php

use App\Http\Controllers\GalerisController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class, 'tampillogin']);
Route::post('kirimlogin',[UserController::class, 'proseslogin']);

Route::get('tampilregister',[UserController::class, 'tampilregister']);
Route::post('kirimregister',[UserController::class, 'kirimregister']);




Route::get('timeline',[GalerisController::class, 'tampilapp']);

