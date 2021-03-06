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

Route::get('usuarios/resetpassword/{id}', [
  'uses'=> 'UsuariosController@resetpassword',
  'as'  =>'usuarios.resetpassword'
]);

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
Route::post('usuarios/destroy/{id}', [
  'uses'=> 'UsuariosController@destroy',
  'as'  =>'usuarios.destroy'
]);

Route::resource('/servicios','ServiciosController');
Route::post('servicios/destroy/{id}', [
  'uses'=> 'ServiciosController@destroy',
  'as'  =>'servicios.destroy'
]);

Route::resource('/profiles','ProfilesController');
Route::post('profiles/destroy/{id}', [
  'uses'=> 'ProfilesController@destroy',
  'as'  =>'profiles.destroy'
]);

Route::resource('/periodos','PeriodosController');

Route::resource('/roles','RolesController');
Route::post('roles/destroy/{id}', [
  'uses'=> 'RolesController@destroy',
  'as'  =>'roles.destroy'
]);

Route::resource('/enfermeras','EnfermerasController');
Route::post('enfermeras/destroy/{id}', [
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

Route::resource('/cambios','CambiosController');
Route::get('cambios/history/{id}', ['as' => 'cambios.history', 'uses' => 'CambiosController@history']);
Route::get('cambios/request/{id}', ['as' => 'cambios.days', 'uses' => 'CambiosController@days']);

Route::resource('/rol_anual','RolAnualEnfermerasController');
Route::post('rol_anual/{id}/destroy', [
    'uses'=> 'RolAnualEnfermerasController@destroy',
    'as'  =>'rol_anual.destroy'
]);
Route::post('rol_anual/update/{id}', [
    'uses'=> 'RolAnualController@update',
    'as'  =>'rol_anual.update'
]);


Route::resource('/rol_mensual','RolMensualController');
Route::post('rol_mensual/{id}/destroy', [
    'uses'=> 'RolMensualController@destroy',
    'as'  =>'rol_mensual.destroy'
]);
Route::post('rol_mensual/update/{id}', [
    'uses'=> 'RolMensualController@update',
    'as'  =>'rol_anual.update'
]);


//fullcalender
Route::get('vacaciones/days/{id}','VacacionesController@index2');

Route::get('rol/servicios', ['as' => 'rol.servicios', 'uses' => 'RolAnualEnfermerasController@mostrardistribucionAnual']);
Route::get('rol/servicios/servicio/{servicio}/profile/{profile}/anno/{anno}', 'RolAnualEnfermerasController@distribucionAnual');

Route::get('rol/enfermeras', ['as' => 'rol.enfermeras', 'uses' => 'RolAnualEnfermerasController@mostrarrolanualenfermera']);
Route::get('rol/enfermeras/enfermera/{enfermera}/anno/{anno}', 'RolAnualEnfermerasController@distribucionAnualEnfermera');

Route::get('reporte/vacaciones', ['as' => 'reporte.mostrarreportevacaciones', 'uses' => 'VacacionesController@mostrarreportevacaciones']);
Route::get('reporte/vacaciones/especialidad/{especialidad}/periodo/{periodo}', 'VacacionesController@reporteVacaciones');

Route::get('reporte/perfiles', ['as' => 'reporte.mostrarreporteperfiles', 'uses' => 'ProfilesController@mostrarreporteperfiles']);
Route::get('reporte/perfiles/profile/{profile}/servicio/{servicio}', 'ProfilesController@reportePerfiles');

//DISTRIBUCION MENSUAL DE ROLES POR SERVICIO
Route::get('rol/serviciosmes', ['as' => 'rol.serviciosmes', 'uses' => 'RolMensualController@mostrardistribucionMensual']);
Route::get('rol/serviciosmes/servicio/{servicio}/profile/{profile}/mes/{mes}/anno/{anno}', 'RolMensualController@distribucionMensual');
//DISTRIBUCION MENSUAL DE ROLES POR ENFERMERO
Route::get('rol/enfermerasmes', ['as' => 'rol.enfermerasmes', 'uses' => 'RolMensualController@mostrarrolMesEnfermera']);
Route::get('rol/enfermerasmes/enfermera/{enfermera}/mes/{mes}/anno/{anno}', 'RolMensualController@distribucionMesEnfermera');
