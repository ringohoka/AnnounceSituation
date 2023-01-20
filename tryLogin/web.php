<?php

use App\Http\Controllers\GroupListController;
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
    return view('login');
});
Route::post('login',[App\Http\Controllers\AccountController::class,'login']);
Route::get('login',[App\Http\Controllers\AccountController::class,'logout'])->middleware("login");
Route::resource('user_userlist', App\Http\Controllers\AccountController::class);

Route::resource('groupviews', GroupListController::class);
