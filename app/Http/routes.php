<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('producto','Producto\ProductoController@index');

Route::resource('marca','Producto\MarcaController');

Route::get('panel','Desktop\AdministratorController@panel');
Route::get('access','Desktop\AdministratorController@access');
Route::get('reports','Desktop\AdministratorController@reports');

Route::get('dashboard','Desktop\DashboardController@index');

Route::resource('product','Producto\ProductoController');
Route::get('modelweb','Desktop\DashboardController@modelweb');

