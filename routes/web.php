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
	if( Auth::check()){
		return redirect('/home');
	}else{
		return view('welcome');
	}
});

Route::get('/show','LoanController@ShowData');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', function () {
    //return view('welcome');
	return view('dashboard');
});

Route::get('/emp','EmployeesController@index');
Route::get('/employees/getEmployees/','EmployeesController@getEmployees');


Route::get('/pagination', 'PaginationController@index');

Route::get('/pagination/fetch_data', 'PaginationController@fetch_data');
