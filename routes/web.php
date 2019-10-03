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
    return view('auth.login');
});
Route::get('/layout', function () {
    return view('layouts.layout');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas del crud de Roles
Route::get('roles', 'RoleController@index')->name('indexRole');
Route::get('roles/modify', 'RoleController@indexModify')->name('indexModifyRole');
Route::get('roles/delete', 'RoleController@indexDelete')->name('indexDeleteRole');
Route::get('roles/create', 'RoleController@create')->name('createRole');
Route::post('roles/create', 'RoleController@store')->name('storeRole');
Route::get('roles/{role}/edit', 'RoleController@edit')->name('editRole');
Route::put('roles/{role}', 'RoleController@update')->name('updateRole');
Route::delete('role/{role}', 'RoleController@destroy')->name('destroyRole');