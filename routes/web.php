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

Route::get('/admin', function(){
    return view('auth.login');
});
Route::get('/', 'PagesController@frontEnd');
Route::get('/home', 'PagesController@index');


// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

/// Appointment Route 
Route::resource('/appointments','AppointmentController');

/// admin Route 
Route::resource('/admin','AdminController');
Route::get('/profile','AdminController@myProfile')->name('profile');
Route::get('/password','AdminController@change')->name('password');
Route::post('/passwordUpdate','AdminController@passwordUpdate')->name('passwordUpdate');

/// Location Route
Route::resource('/location','LocationController');

//// product Route 
Route::resource('/product','ProductController');

//// stylish Route 
Route::resource('/stylish','StylishController');

//// Service Route
Route::resource('/service','ServiceController');

//// Service Route
Route::get('/stylish/{id}/service','StylishServiceController@index');
Route::resource('/stylish-service','StylishServiceController');
