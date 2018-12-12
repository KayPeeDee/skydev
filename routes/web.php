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
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-business','Business\BusinessController@registerBusinessForm')->name('register_business_form');
Route::post('/register-business','Business\BusinessController@registerMyBusiness')->name('register_my_business');

Route::get('/business','Business\BusinessController@dashboard')->name('dashboard');

Route::get('/contacts','Business\ContactsController@index')->name('get_my_contacts');
Route::post('/contacts','Business\ContactsController@addContact')->name('register_my_contact');

