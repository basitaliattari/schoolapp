<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
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



  
Route::resource('teachers', TeacherController::class);

//dashboard work
Route::get('/dashboard','App\Http\Controllers\HomeController@dashboard' );
Route::get('/dashboard2','App\Http\Controllers\HomeController@dashboard2' );
Route::get('/dashboard3','App\Http\Controllers\HomeController@dashboard3' );
//login work
Route::get('/login','App\Http\Controllers\AuthController@login' );
Route::post('/login','App\Http\Controllers\AuthController@loginpost' );

//register work
Route::get('/register','App\Http\Controllers\AuthController@register' );
Route::post('/register','App\Http\Controllers\AuthController@registerpost' );

Route::get('/class','App\Http\Controllers\ClassController@index' );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




