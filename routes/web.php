<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/drugs/{drug}/edit', 'DrugController@edit');
Route::resource('/drugs', 'DrugController');
Route::resource('/procure', 'ProcurementController');
Route::get('/drugs/{id}/procure', 'ProcurementController@edit')->name('procure');

Route::resource('/products', 'StoreController');
Route::get('/drugs/{id}/distribute', 'DistributionController@edit')->name('dist.edit');
