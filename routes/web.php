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

Route::get('/', function () {
    return view('project.view_job');
});


Route::get('/','JobController@index');
Route::get('/job/create','JobController@create');
Route::post('/job/store','JobController@store');
Route::get('/job/fetch','JobController@index');
Route::get('/job/edit/{id}','JobController@edit');
Route::get('/job/update/{id}','JobController@update');

// Route::get('/job/details','JobController@finddetails')->name('description.fetch');

route::get('job/description/{id}','JobController@finddetails')->name('description');
