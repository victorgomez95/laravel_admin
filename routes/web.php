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


Route::resource('almacen/categoria',    'categoriaCtrl');
Route::resource('almacen/articulo',     'articuloCtrl');
Route::resource('ventas/cliente',       'clienteCtrl');
Route::resource('ventas/venta',         'ventaCtrl');
Route::resource('compras/proveedor',    'proveedorCtrl');
Route::resource('compras/ingreso',      'ingresoCtrl');
Route::resource('seguridad/usuario',    'userCtrl');
Route::get('/{slug?}', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');


