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


Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@authenticate');

Route::group(['middleware' => 'auth_user'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/technical', 'TechnicalController@technical');
    Route::get('/technical_php', 'TechnicalController@technical_php');
    Route::get('/employee', 'EmployeeController@index');
    Route::get('/department', 'DepartmentController@index');
    Route::get('/dependent', 'DependentController@index');
    Route::get('/region', 'LocationController@region');
    Route::get('/country', 'LocationController@country');
    Route::get('/location', 'LocationController@location');
    Route::get('/job', 'JobController@index');
    Route::get('/logout', 'AuthController@logout');
});
