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

// Authentication routes...
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'admin', 'namespace' => '\Admin', 'middleware' => 'auth'], function () {

    Route::get('/', 'UsersController@begin');


    Route::group(['middleware' => ['adminAuth']], function () {
        //Routes centros
        Route::resource('centros', 'CentrosController');

        //Routes Users
        Route::resource('users', 'UsersController');
        Route::resource('TiposCentros' , 'TiposCentrosController');
        Route::get('UserExists/{email}','UsersController@userExists');
        Route::get('EmailExists/{user}','UsersController@emailExists');
    });


    // Routes Boleta
    Route::resource('boleta', 'BoletaController');
    Route::get('weekReport', 'BoletaController@weekReport');

});
