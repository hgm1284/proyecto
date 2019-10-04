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
    return view('auth/login');
});

Auth::routes();
Route::get('registrar', ['as' => 'registrar', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('registrar', ['as' => 'registrar.post', 'uses' => 'Auth\RegisterController@register']);
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/usuarios','UsuariosController');
Route::get('usuarios/{id}/destroy', [
    'uses'=> 'UsuariosController@destroy',
    'as'  =>'usuarios.destroy'
]);
Route::resource('/servicios','ServiciosController');
Route::get('servicios/{id}/destroy', [
    'uses'=> 'ServiciosController@destroy',
    'as'  =>'servicios.destroy'
]);
Route::resource('/profiles','ProfilesController');
Route::get('profiles/{id}/destroy', [
    'uses'=> 'ProfilesController@destroy',
    'as'  =>'profiles.destroy'
]);
