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
Route::get('/reportar', 'HomeController@report');

//Creamos un grupo de rutas que sean validadas por un middleware
//Solo podrán acceder a estas rutas los usuarios administradores
Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/usuarios', 'UserController@index');
    Route::get('/proyectos', 'ProjectController@index');
    Route::get('/configuracion', 'ConfigController@index');
});