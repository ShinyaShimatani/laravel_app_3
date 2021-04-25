<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Humor;

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

//top page//
Route::get('/', 'App\Http\Controllers\MembersController@show')->name('show_chart');

// top page -> CRUD //
Route::get('/register', 'App\Http\Controllers\MembersController@register')->name('register');
Route::post('/register/store', "App\Http\Controllers\FormController@store")->name("store");

Route::get('/edit', 'App\Http\Controllers\MembersController@edit')->name('edit');
Route::post('/update','App\Http\Controllers\MembersController@update')->name('update');

Route::get('/delete', 'App\Http\Controllers\MembersController@delete')->name('delete');

Route::get('/form', "App\Http\Controllers\FormController@show")->name("form.show");

// top page -> idea page //
Route::get('/idea', 'App\Http\Controllers\TrainersController@index')->name('idea');




