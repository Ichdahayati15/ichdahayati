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

Route::get('/employees','EmployeesController@employees');
Route::get('/employees/add','EmployeesController@add');
Route::post('/employees/store', 'EmployeesController@store');
Route::get('/employees/edit/{id}','EmployeesController@edit');
Route::put('/employees/update/{id}', 'EmployeesController@update');
Route::get('/employees/delete/{id}', 'EmployeesController@delete');
