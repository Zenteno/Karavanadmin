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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::resource('clientes','clientsController');
Route::resource('pantallas','screensController');
Route::resource('canales','channelsController');
Route::post('/guardar','channelsController@guardar')->name('canales.guardar');

Route::get('{id}/getPantallas','apiController@getPantallas')->name('api.getPantallas');
Route::get('cliente/{id}/pantallas','clientsController@pantallas');
Route::post('/api/getLink','clientsController@getLink');
