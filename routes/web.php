<?php
Route::get('/', function () {return view('auth.login');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home2','HomeController@index2')->name('home2');
//Rutas del crud de Roles
Route::get('roles', 'RoleController@index')->name('indexRole');
Route::get('roles/modify', 'RoleController@indexModify')->name('indexModifyRole');
Route::get('roles/delete', 'RoleController@indexDelete')->name('indexDeleteRole');
Route::get('roles/create', 'RoleController@create')->name('createRole');
Route::post('roles/create', 'RoleController@store')->name('storeRole');
Route::get('roles/{role}/edit', 'RoleController@edit')->name('editRole');
Route::put('roles/{role}', 'RoleController@update')->name('updateRole');
Route::delete('roles/{role}', 'RoleController@destroy')->name('destroyRole');

//Rutas del CRUD de Tipos de Datos
Route::get('datatypes', 'DatatypeController@index')->name('indexDatatype');
Route::get('datatypes/modify', 'DatatypeController@indexModify')->name('indexModifyDatatype');
Route::get('datatypes/delete', 'DatatypeController@indexDelete')->name('indexDeleteDatatype');
Route::get('datatypes/create', 'DatatypeController@create')->name('createDatatype');
Route::post('datatypes/create', 'DatatypeController@store')->name('storeDatatype');
Route::get('datatypes/{datatype}/edit', 'DatatypeController@edit')->name('editDatatype');
Route::put('datatypes/{datatype}', 'DatatypeController@update')->name('updateDatatype');
Route::delete('datatypes/{datatype}', 'DatatypeController@destroy')->name('destroyDatatype');

//Rutas del CRUD de Cotejamientos
Route::get('collations', 'CollationController@index')->name('indexCollation');
Route::get('collations/modify', 'CollationController@indexModify')->name('indexModifyCollation');
Route::get('collations/delete', 'CollationController@indexDelete')->name('indexDeleteCollation');
Route::get('collations/create', 'CollationController@create')->name('createCollation');
Route::post('collations/create', 'CollationController@store')->name('storeCollation');
Route::get('collations/{collation}/edit', 'CollationController@edit')->name('editCollation');
Route::put('collations/{collation}', 'CollationController@update')->name('updateCollation');
Route::delete('collations/{collation}', 'CollationController@destroy')->name('destroyCollation');

//Rutas del CRUD de Motores de Bases de Datos
Route::get('dbengines', 'DBEngineController@index')->name('indexDBEngine');
Route::get('dbengines/modify', 'DBEngineController@indexModify')->name('indexModifyDBEngine');
Route::get('dbengines/delete', 'DBEngineController@indexDelete')->name('indexDeleteDBEngine');
Route::get('dbengines/create', 'DBEngineController@create')->name('createDBEngine');
Route::post('dbengines/create', 'DBEngineController@store')->name('storeDBEngine');
Route::get('dbengines/{dBEngine}/edit', 'DBEngineController@edit')->name('editDBEngine');
Route::put('dbengines/{dBEngine}', 'DBEngineController@update')->name('updateDBEngine');
Route::delete('dbengines/{dBEngine}', 'DBEngineController@destroy')->name('destroyDBEngine');


Route::resource('clients', 'ClientController');
Route::resource('projects', 'ProjectController');
Route::resource('databases', 'DatabaseController');