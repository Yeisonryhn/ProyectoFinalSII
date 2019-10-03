<?php
Route::get('/', function () {return view('auth.login');});
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
Route::delete('roles/{role}', 'RoleController@destroy')->name('destroyRole');

//Rytas del CRUD de Tipos de Datos
Route::get('datatypes', 'DatatypeController@index')->name('indexDatatype');
Route::get('datatypes/modify', 'DatatypeController@indexModify')->name('indexModifyDatatype');
Route::get('datatypes/delete', 'DatatypeController@indexDelete')->name('indexDeleteDatatype');
Route::get('datatypes/create', 'DatatypeController@create')->name('createDatatype');
Route::post('datatypes/create', 'DatatypeController@store')->name('storeDatatype');
Route::get('datatypes/{datatype}/edit', 'DatatypeController@edit')->name('editDatatype');
Route::put('datatypes/{datatype}', 'DatatypeController@update')->name('updateDatatype');
Route::delete('datatypes/{datatype}', 'DatatypeController@destroy')->name('destroyDatatype');
