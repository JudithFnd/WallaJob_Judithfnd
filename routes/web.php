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

//Home
Route::get('/', 'IndexController@index')->name('index');
Route::get('/indexEs', 'IndexEsController@indexEs')->name('indexEs');
Route::get('/indexCa', 'IndexCaController@indexCa')->name('indexCa');

// Sign up
Route::get('/register', 'RegistrationController@create')->name('signup');
Route::post('register', 'RegistrationController@store')->name('createUser');

// Log in log out
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('my-account', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

// Return to my account
Route::get('/my-account', 'SessionsController@myAccount')->name('myAccount');


// Company account
Route::post('/my-company-account', 'AccountsController@accountCompany')->name('accountCompany');
// Company data
Route::get('/my-company-account/company-data', 'CompanyDataController@companyData')->name('companyData');
Route::post('/my-company-account/company-data', 'CompanyDataController@store');
// Post a job
Route::get('/my-company-account/company-offer', 'CompanyOfferController@companyOffer')->name('companyOffer');
Route::post('/my-company-account/company-offer', 'CompanyOfferController@store');


// Offers published
Route::get('/offers', 'CompanyOfferController@publishedOffers')->name('offers');
Route::get('offers/{id}', 'CompanyOfferController@show')->name('show_offer');


///////////////////////////////////////////////////////////////////////////////////////////////////////
// Professional account
Route::post('/my-professional-account', 'AccountsController@accountProfessional')->name('accountProfessional');
// Currículum
Route::get('/my-professional-account/my-curriculum', 'CurriculumController@curriculum')->name('curriculum');
Route::post('/my-professional-account/my-curriculum', 'CurriculumController@store');
// Publication professional
Route::get('/my-professional-account/publication-professional', 'PublicationProfessionalController@publicationProfessional')->name('publicationProfessional');
Route::post('/my-professional-account/publication-professional', 'PublicationProfessionalController@store');
///////////////////////////////////////////////////////////////////////////////////////////////////////

// Published professionals
Route::get('/publications', 'PublicationProfessionalController@publishedProfessionals')->name('publications');
Route::get('/publication/contact-professional/{id}', 'PublicationProfessionalController@contactProfessional')->name('showContact');
Route::get('/publication/{id}', 'PublicationProfessionalController@show')->name('showPublication');



// more
Route::get('/contact2', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::get('/about', 'AboutController@about')->name('about');
Route::get('/privacyPolicy', 'PrivacyPolicyController@privacyPolicy')->name('privacyPolicy');
Route::get('/bookmarked', 'Bookmarked@bookmarked')->name('bookmarked');
Route::get('/change-password', 'ChangePassword@changePassword')->name('change-password');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/faq', 'Faq@faq')->name('faq');