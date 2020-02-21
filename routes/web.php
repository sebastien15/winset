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



Route::get('/','indexController@index')->name('index');
Route::get('/aboutus','indexController@aboutus')->name('aboutus');
Route::get('/contactus','indexController@contactus')->name('contactus');
Route::get('/propertyDesc/{id}', 'indexController@propertyDescription')->name('propertyDescription');
Route::get('/properties','indexController@properties')->name('properties');
Route::get('/search','indexController@search')->name('search');
Route::get('/propertyValuation','indexController@propertyValuation')->name('propertyValuation');

Route::resource('agent','agentController');
Route::resource('clientsReview','clientsReviewController');
Route::resource('agentImage','agentImageController');
Route::resource('imageProperty','imagePropertyController');
Route::resource('location','locationController');
Route::resource('partner','partnersController');
Route::resource('property','propertyController');
Route::resource('reviewerImage','reviewerImageController');
Route::resource('suggestion','suggestionController');
Route::get('userSearch/advanced','userSearchController@advanced')->name('userSearch.advanced');
Route::resource('userSearch','userSearchController');
Route::resource('contact','contactUsController')->except('create','edit','update');
Route::resource('valuation','valuationRequestController');
Route::resource('company','companyController');
Route::resource('detail','detailController');
Route::get('/detail/create/{id}','detailController@create')->name('detail.create');
Route::resource('bank','bankController')->except('edit','create','update','show');
Route::resource('type','typeController')->except('edit','create','update','show');
Route::resource('interest','interestController')->except('edit','create','update','show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
