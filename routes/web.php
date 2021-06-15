<?php

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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/login1', function () {
    return view('login');
});
Route::get('/studentshow', function () {
    return view('studentshow');
});

Route::get('/updateshow', function () {
    return view('updateshow');
});

Route::post('saveregister','StudentController@reginsert');    
Route::get('studentshow','StudentController@studentshow');
Route::get('updateshow/{id}','StudentController@updateshow');
Route::post('update/{id}','StudentController@update');
Route::get('delete1/{id}','StudentController@delete1');

Route::post('savecontect','contactusController@contates');
Route::get('showcontect','contactusController@showcontect');
Route::get('delete/{id}','contactusController@delete');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/logout1','HomeController@logout1');
