<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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


Route::get('/input', function () {
    return view('input');
})->name('input')->middleware('auth');

Route::get('/results', function () {
    return view('results');
})->name('results')->middleware('auth');

Route::post('/predict', 'HomeController@sendpredict')->name('sendpredict')->middleware('auth');

Route::post('/sendmail', 'MailController@sendmail')->name('sendemail');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('predict/delete/{id}', [
    'uses' => 'HomeController@destroy',
    'as' => 'predict.delete'
]);
