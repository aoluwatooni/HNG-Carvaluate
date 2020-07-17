<?php

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
})->name('landing');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newlogin', function () {
    return view('newlogin');
})->name('newlogin');

Route::get('/newregister', function () {
    return view('newregister');
})->name('newregister');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
