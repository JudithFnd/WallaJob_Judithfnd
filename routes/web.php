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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/login', 'MyAccountController@myAccount')->name('login');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/privacyPolicy', 'PrivacyPolicyController@privacyPolicy')->name('privacyPolicy');
Route::get('/indexEs', 'IndexEsController@indexEs')->name('indexEs');
Route::get('/indexCa', 'IndexCaController@indexCa')->name('indexCa');
Route::get('/bookmarked', 'Bookmarked@bookmarked')->name('bookmarked');
Route::get('/change-password', 'ChangePassword@changePassword')->name('change-password');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/faq', 'Faq@faq')->name('faq');

