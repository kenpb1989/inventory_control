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
// メインコントローラーのルート
Route::get('', 'MainController@index')->name('index');
Route::get('list', 'MainController@list')->name('list');
Route::get('show', 'MainController@show')->name('show');
Route::post('show', 'MainController@show');

// カンパニーコントローラーのルート
Route::get('companyNew', 'CompanyController@new')->name('companyNew');
Route::post('companyNew', 'CompanyController@newPost');
Route::get('companyEdit', 'CompanyController@edit')->name('companyEdit');
Route::post('companyEdit', 'CompanyController@editPost');

// マテリアルコントローラーのルート
Route::get('materialNew', 'MaterialController@new')->name('materialNew');
Route::post('materialNew', 'MaterialController@newPost');
Route::get('materialEdit', 'MaterialController@edit')->name('materialEdit');
Route::post('materialEdit', 'MaterialController@editPost');
