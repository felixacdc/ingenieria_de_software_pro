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
        //Route::get('pruebaPDF','BoletaController@pruebaPDF');

        //Routes Users
        //Route::put('prueba/activate','UsersController@activate');
        Route::get('UserExists/{user}','UsersController@userExists');
        Route::get('EmailExists/{email}','UsersController@emailExists');
        Route::get('UserUpdate/{user}/{id}','UsersController@userUpdate');
        Route::get('EmailUpdate/{email}/{id}','UsersController@emailUpdate');
        Route::put('prueba/activate/{id}',['as'=>'admin/prueba/activate','uses'=>'UsersController@activate']);
        Route::resource('users', 'UsersController');

        Route::resource('TiposCentros' , 'TiposCentrosController');


    });

    // Routes Boleta
    Route::resource('boleta', 'BoletaController');
    Route::get('weekReport', 'BoletaController@weekReport');
    Route::get('reports/dataWeekReport', ['as' => 'admin/reports/dataWeekReport', 'uses' => 'BoletaController@dataWeekReport']);

    // Report Routes
    Route::get('reports/{field}/{type?}', 'ReportsController@showPatient');
    Route::post('generate/report/pdf', ['as' => 'admin/generate/report/pdf', 'uses' => 'ReportsController@pdfReports']);
});
