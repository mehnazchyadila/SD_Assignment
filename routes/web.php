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
    return view('website.welcome');
});

Route::get('/about', function () {
    return view('website.pages.about');
});
Route::get('/contact', function () {
    return view('website.pages.contact');
});
Route::get('/service', function () {
    return view('website.pages.service');
});
Route::get('employees','EmployeeController@index');
Route::get('add-employees','EmployeeController@add');
Route::post('insert-employees','EmployeeController@store');
Route::get('add-student','StudentController@create');
Route::post('store-student','StudentController@store');
Route::get('students','StudentController@index');
Route::get('edit-student/{id}','StudentController@edit');
Route::post('update-student/{id}','StudentController@update');



Route::get('login','AuthController@login');
Route::post('loginstore','AuthController@loginstore');

Route::group(['middleware' => 'checkloggedin'], function(){
	Route::get('dashboard' , function(){
        return view('admin.pages.dashboard');
    });
    
    // route for categories
    Route::get('categories' , function(){
        return view('admin.pages.categories');
    });
    
    // route for chart
    Route::get('charts' , function(){
        return view('admin.pages.charts');
    });
    Route::get('products' , 'ProductController@all');
    Route::get('create-employees' ,'EmployeeController@createemp');
    Route::post('store-employee' ,'EmployeeController@storeemp');
    Route::get('image-upload' , 'ImageController@index');
    Route::post('upload' ,'ImageController@upload');
    Route::get('ajax','AjaxController@ajax');
    
    
});