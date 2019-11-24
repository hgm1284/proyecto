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
Route::get('/perfil', 'HomeController@perfil')->name('perfil');

Route::POST('usuarios/updateProfile/{id}', [
  'uses'=> 'UsuariosController@updateProfile',
  'as'  =>'usuarios.perfil'
]);

Route::POST('usuarios/updatePass/{id}', [
  'uses'=> 'UsuariosController@updatePass',
  'as'  =>'usuarios.updatePass'
]);

Route::resource('/usuarios','UsuariosController');
Route::post('usuarios/{id}/destroy', [
  'uses'=> 'UsuariosController@destroy',
  'as'  =>'usuarios.destroy'
]);
Route::resource('/servicios','ServiciosController');
Route::post('servicios/{id}/destroy', [
  'uses'=> 'ServiciosController@destroy',
  'as'  =>'servicios.destroy'
]);
Route::resource('/profiles','ProfilesController');
Route::post('profiles/{id}/destroy', [
  'uses'=> 'ProfilesController@destroy',
  'as'  =>'profiles.destroy'
]);
Route::resource('/roles','RolesController');
Route::post('roles/{id}/destroy', [
  'uses'=> 'RolesController@destroy',
  'as'  =>'roles.destroy'
]);
Route::resource('/enfermeras','EnfermerasController');
Route::post('enfermeras/{id}/destroy', [
  'uses'=> 'EnfermerasController@destroy',
  'as'  =>'enfermeras.destroy'
]);
Route::get('vacaciones/show/{id}', 'VacacionesController@show')->name('vacaciones.calendar');
Route::resource('/vacaciones','VacacionesController');
Route::get('vacaciones/history/{id}', ['as' => 'vacaciones.history', 'uses' => 'VacacionesController@history']);
Route::get('vacaciones/user/{user}/periodo/{periodo}', ['as' => 'vacaciones.historyVacationsRequested', 'uses' => 'VacacionesController@historyVacationsRequested']);
Route::get('vacaciones/request/{id}', ['as' => 'vacaciones.days', 'uses' => 'VacacionesController@days']);

Route::post('vacaciones/{id}/destroy', [
  'uses'=> 'VacacionesController@destroy',
  'as'  =>'vacaciones.destroy'
]);

Route::resource('/rol_anual','RolAnualController');
Route::post('rol_anual/{id}/destroy', [
    'uses'=> 'RolAnualController@destroy',
    'as'  =>'rol_anual.destroy'
]);
//fullcalender
Route::get('vacaciones/days/{id}','VacacionesController@index2');
Route::post('fullcalendar/create','VacacionesController@create2');
Route::post('fullcalendar/update','VacacionesController@update2');
Route::post('fullcalendar/delete','VacacionesController@destroy2');
