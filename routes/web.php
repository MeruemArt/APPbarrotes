<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
Route::get('dataTableUSer', 'UserController@dataTable')->name('dataTableUser');

Route::resource('roles', 'RolesController');
Route::get('dataTableRoles', 'RolesController@dataTable')->name('dataTableRoles');

Route::resource('configuracion', 'ConfiguracionController');
Route::get('dataTableConfiguracion', 'ConfiguracionController@dataTable')->name('dataTableConfiguracion');

Route::resource('proveedores', 'ProveedoresController');
Route::get('dataTableProveedores', 'ProveedoresController@dataTable')->name('dataTableProveedores');

Route::resource('productos', 'ProductosController');
Route::get('dataTableProductos', 'ProductosController@dataTable')->name('dataTableProductos');