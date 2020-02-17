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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/occasions/{slug}', 'PagesController@occasions');
Route::get('/services/{slug}', 'PagesController@occasions');
Route::get('/packages', 'PagesController@packages');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/contact', 'PagesController@contact');


Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


Route::group(['middleware' => 'auth'], function()
{
    Route::get('/backend/pages', 'Backend\PagesController@index');
    Route::get('/backend/pages/edit/{id}', 'Backend\PagesController@edit');
    Route::patch('/backend/pages/update/{id}', 'Backend\PagesController@update');

    Route::get('/backend/occasions', 'Backend\OccasionsController@index');
    Route::get('/backend/occasions/edit/{id}', 'Backend\OccasionsController@edit');
    Route::patch('/backend/occasions/update/{id}', 'Backend\OccasionsController@update');

    Route::get('/backend/occasionDetails/{id}', 'Backend\OccasionDetailsController@index');
    Route::get('/backend/occasionDetails/edit/{id}', 'Backend\OccasionDetailsController@edit');
    Route::patch('/backend/occasionDetails/update/{id}', 'Backend\OccasionDetailsController@update');


});
