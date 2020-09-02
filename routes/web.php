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

Route::get('/', function () {
    return view('pages.landing.index');
});

// Announcement guest users
Route::get('/info', 'AnnouncementsController@view')->name('info');
Route::get('/info/{id}', 'AnnouncementsController@showInfo')->name('showInfo');
// end

// Marriage Guest users
Route::get('/programme', 'MarriagesController@view')->name('programme');

// Pix guest
Route::get('/pix', 'PicturesController@view')->name('pix');

Route::resource('/direction', 'MapsController');


Route::group(['prefix' => 'cpanel'], function() {
  Route::auth();
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
  Route::resource('/announcements', 'AnnouncementsController');
  Route::resource('/marriage', 'MarriagesController');
  Route::resource('/photos', 'PicturesController');
});




