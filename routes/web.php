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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/dashboard',  'App\Http\Controllers\DashboardController@index');


Route::resource('/expense_reports', 'App\Http\Controllers\ExpenseReportController');


Route::get('expense_reports/{id}/confirmDelete', 'App\Http\Controllers\ExpenseReportController@confirmDelete');
//nuevas rutas para crear nuevos gastos en cierto elemento
Route::get('expense_reports/{expense_report}/expenses/create', 'App\Http\Controllers\ExpenseController@create');
Route::post('expense_reports/{expense_report}/expenses', 'App\Http\Controllers\ExpenseController@store');

//email

Route::get('expense_reports/{id}/confirmSendMail', 'App\Http\Controllers\ExpenseReportController@confirmSendMail');
Route::post('expense_reports/{id}/sendMail', 'App\Http\Controllers\ExpenseReportController@sendMail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
