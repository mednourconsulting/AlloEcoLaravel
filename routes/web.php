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


Auth::routes(['verify' => true]);

Route::get('/', 'AcceuilController@showAll');

Route::post('/','ContactController@store');

Route::get('/communique/{id}', 'AcceuilController@showCommunique');
Route::get('/activite/{id}', 'AcceuilController@showActivite');

/*
Route::get('/verify','VerifyController@getVerify')->name('getVerify');
Route::post('/verify','VerifyController@postVerify')->name('verify');
*/

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/utilisateurs', 'AdminController@users')->name('admin.users');
  Route::resource('/activites','ActiviteController');
  Route::resource('/communiques','CommuniqueController');
  Route::get('/reclamations','AdminController@reclamations')->name('admin.reclamations');
  Route::get('/reclamations/{id}','AdminController@showReclamation')->name('admin.showReclamation');
  Route::get('/messages','AdminController@messages')->name('admin.messages');
  Route::get('/messages/{id}','AdminController@showMessage')->name('admin.showMessage');
  Route::get('/excel', 'AdminController@excel')->name('admin.excel');
});


Route::resource('reclamations','CvController');
