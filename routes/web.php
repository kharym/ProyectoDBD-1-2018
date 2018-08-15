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

Route::get('/actividad','ActividadController@index');
Route::get('/actividad/{id}','ActividadController@show');
Route::post('/actividad/create','ActividadController@store');
Route::post('/actividad/update/{id}','ActividadController@update');
Route::get('/actividad/delete/{id}','ActividadController@destroy');

Route::get('/aerolinea','AerolineaController@index');
Route::get('/aerolinea/{id}','AerolineaController@show');
Route::post('/aerolinea/create','AerolineaController@store');
Route::post('/aerolinea/update/{id}','AerolineaController@update');
Route::get('/aerolinea/delete/{id}','AerolineaController@destroy');

Route::get('/aeropuerto','AeropuertoController@index');
Route::get('/aeropuerto/{id}','AeropuertoController@show');
Route::post('/aeropuerto/create','AeropuertoController@store');
Route::post('/aeropuerto/update/{id}','AeropuertoController@update');
Route::get('/aeropuerto/delete/{id}','AeropuertoController@destroy');

Route::get('/alojamiento','AlojamientoController@index');
Route::get('/alojamiento/{id}','AlojamientoController@show');
Route::post('/alojamiento/create','AlojamientoController@store');
Route::post('/alojamiento/update/{id}','AlojamientoController@update');
Route::get('/alojamiento/delete/{id}','AlojamientoController@destroy');

Route::get('/asiento','AsientoController@index');
Route::get('/asiento/{id}','AsientoController@show');
Route::post('/asiento/create','AsientoController@store');
Route::post('/asiento/update/{id}','AsientoController@update');
Route::get('/asiento/delete/{id}','AsientoController@destroy');

Route::get('/auto','AutoController@index');
Route::get('/auto/{id}','AutoController@show');
Route::post('/auto/create','AutoController@store');
Route::post('/auto/update/{id}','AutoController@update');
Route::get('/auto/delete/{id}','AutoController@destroy');

Route::get('/compra','CompraController@index');
Route::get('/compra/{id}','CompraController@show');
Route::post('/compra/create','CompraController@store');
Route::post('/compra/update/{id}','CompraController@update');
Route::get('/compra/delete/{id}','CompraController@destroy');

Route::get('/habitacion','HabitacionController@index');
Route::get('/habitacion/{id}','HabitacionController@show');
Route::post('/habitacion/create','HabitacionController@store');
Route::post('/habitacion/update/{id}','HabitacionController@update');
Route::get('/habitacion/delete/{id}','HabitacionController@destroy');

Route::get('/historialcompra','HistorialcompraController@index');
Route::get('/historialcompra/{id}','HistorialcompraController@show');
Route::post('/historialcompra/create','HistorialcompraController@store');
Route::post('/historialcompra/update/{id}','HistorialcompraController@update');
Route::get('/historialcompra/delete/{id}','HistorialcompraController@destroy');

Route::get('/historialuser','HistorialuserController@index');
Route::get('/historialuser/{id}','HistorialuserController@show');
Route::post('/historialuser/create','HistorialuserController@store');
Route::post('/historialuser/update/{id}','HistorialuserController@update');
Route::get('/historialuser/delete/{id}','HistorialuserController@destroy');

Route::get('/historialuser','HistorialuserController@index');
Route::get('/historialuser/{id}','HistorialuserController@show');
Route::post('/historialuser/create','HistorialuserController@store');
Route::post('/historialuser/update/{id}','HistorialuserController@update');
Route::get('/historialuser/delete/{id}','HistorialuserController@destroy');

Route::get('/paquete','PaqueteController@index');
Route::get('/paquete/{id}','PaqueteController@show');
Route::post('/paquete/create','PaqueteController@store');
Route::post('/paquete/update/{id}','PaqueteController@update');
Route::get('/paquete/delete/{id}','PaqueteController@destroy');

Route::get('/proveedorAuto','ProveedorAutoController@index');
Route::get('/proveedorAuto/{id}','ProveedorAutoController@show');
Route::post('/proveedorAuto/create','ProveedorAutoController@store');
Route::post('/proveedorAuto/update/{id}','ProveedorAutoController@update');
Route::get('/proveedorAuto/delete/{id}','ProveedorAutoController@destroy');

Route::get('/proveedorTraslado','ProveedorTrasladoController@index');
Route::get('/proveedorTraslado/{id}','ProveedorTrasladoController@show');
Route::post('/proveedorTraslado/create','ProveedorTrasladoController@store');
Route::post('/proveedorTraslado/update/{id}','ProveedorTrasladoController@update');
Route::get('/proveedorTraslado/delete/{id}','ProveedorTrasladoController@destroy');

Route::get('/rol','RolController@index');
Route::get('/rol/{id}','RolController@show');
Route::post('/rol/create','RolController@store');
Route::post('/rol/update/{id}','RolController@update');
Route::get('/rol/delete/{id}','RolController@destroy');

Route::get('/traslado','TrasladoController@index');
Route::get('/traslado/{id}','TrasladoController@show');
Route::post('/traslado/create','TrasladoController@store');
Route::post('/traslado/update/{id}','TrasladoController@update');
Route::get('/traslado/delete/{id}','TrasladoController@destroy');

Route::get('/ubicacion','UbicacionController@index');
Route::get('/ubicacion/{id}','UbicacionController@show');
Route::post('/ubicacion/create','UbicacionController@store');
Route::post('/ubicacion/update/{id}','UbicacionController@update');
Route::get('/ubicacion/delete/{id}','UbicacionController@destroy');

Route::get('/user','UserController@index');
Route::get('/user/{id}','UserController@show');
Route::post('/user/create','UserController@store');
Route::post('/user/update/{id}','UserController@update');
Route::get('/user/delete/{id}','UserController@destroy');

Route::get('/vuelo','VueloController@index');
Route::get('/vuelo/{id}','VueloController@show');
Route::post('/vuelo/create','VueloController@store');
Route::post('/vuelo/update/{id}','VueloController@update');
Route::get('/vuelo/delete/{id}','VueloController@destroy');