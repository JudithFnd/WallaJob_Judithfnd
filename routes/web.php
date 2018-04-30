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

Route::get('/', 'IndexController@index');
Route::get('/login', 'MyAccountController@myAccount');
Route::get('/bookmarked', 'Bookmarked@bookmarked');
Route::get('/change-password', 'ChangePassword@changePassword');
Route::get('/contact', 'Contact@contact');
Route::get('/faq', 'Faq@faq');
Route::get('/about', 'AboutController@about');
Route::get('/privacyPolicy', 'PrivacyPolicyController@privacyPolicy');
Route::get('/indexEs', 'IndexEsController@indexEs');
Route::get('/indexCa', 'IndexCaController@indexCa');
