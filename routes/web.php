<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Route::get('/', 'UserController@index');
Route::get('/',[UserController::class, 'index']);
Route::post('/',[UserController::class, 'store'])->name('users.store');;
Route::delete('/',[UserController::class, 'destroy'])->name('users.destroy');
//Route::post('users','UserController@store')->name('users.store');
//Route::delete('users{user}','UserController@destroy')->name('users.destroy');
