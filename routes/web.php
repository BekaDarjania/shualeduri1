<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/companies');
});

Route::get('/companies', '\App\Http\Controllers\CompaniesController@index');
Route::get('/companies/create', '\App\Http\Controllers\CompaniesController@create');
Route::post('/companies/store', '\App\Http\Controllers\CompaniesController@store');
Route::post('/companies/update/{id}', '\App\Http\Controllers\CompaniesController@update');
Route::get('/companies/edit/{id}', '\App\Http\Controllers\CompaniesController@edit');
Route::get('/companies/delete/{id}', '\App\Http\Controllers\CompaniesController@destroy');


Route::get('/employees', '\App\Http\Controllers\EmployeesController@index');
