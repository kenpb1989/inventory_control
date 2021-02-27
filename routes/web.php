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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\MainController;

Route::get('', 'MainController@index');

Route::get('companyNew', 'CompanyController@new');
Route::post('companyNew', 'CompanyController@new2');

Route::get('companyEdit', 'CompanyController@edit')->name('edit');
Route::post('companyEdit', 'CompanyController@edit2');
