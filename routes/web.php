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

Route::get('/', 'authController@login')->middleware('SessionHandler');
Route::get('/signup', 'authController@signup')->middleware('SessionHandler');
Route::get('/forget-password', 'authController@recover')->middleware('SessionHandler');
Route::get('/apps/calender', 'authController@calender')->middleware('SessionHandler');
Route::get('/apps/chat', 'authController@chat')->middleware('SessionHandler');
Route::get('/apps/tickets', 'authController@tickets')->middleware('SessionHandler');
Route::get('/apps/contact', 'authController@contact')->middleware('SessionHandler');
Route::get('/apps/contact-grid', 'authController@contactGrid')->middleware('SessionHandler');
Route::get('/profile/contact-details', 'authController@contactDetails')->middleware('SessionHandler');
Route::get('/genre', 'authController@genre')->middleware('SessionHandler');
Route::get('/albums', 'authController@albums')->middleware('SessionHandler');
Route::get('/albums/add', 'authController@addAlbums')->middleware('SessionHandler');
Route::get('/albums/details-Album', 'authController@detailsAlbum')->middleware('SessionHandler');
Route::get('/artists', 'authController@artists')->middleware('SessionHandler');
Route::get('/artists/details', 'authController@artistDetails')->middleware('SessionHandler');
Route::get('/artists/add', 'authController@addArtist')->middleware('SessionHandler');
Route::get('/audio', 'authController@audio')->middleware('SessionHandler');
Route::get('/audio/add', 'authController@addAudio')->middleware('SessionHandler');
Route::get('/videos', 'authController@videos')->middleware('SessionHandler');
Route::get('/videos/add', 'authController@addVideos')->middleware('SessionHandler');
Route::get('/videos/details', 'authController@videoDetails')->middleware('SessionHandler');
Route::get('/genre/add', 'authController@addGenre')->middleware('SessionHandler');
Route::get('/Ui-Elements/cards', 'authController@cards')->middleware('SessionHandler');
Route::get('/Ui-Elements/User-Card', 'authController@userCards')->middleware('SessionHandler');
Route::get('/Ui-Elements/buttons', 'authController@buttons')->middleware('SessionHandler');
Route::get('/Ui-Elements/modals', 'authController@modals')->middleware('SessionHandler');
Route::get('/Ui-Elements/tabs', 'authController@tabs')->middleware('SessionHandler');
Route::get('/Ui-Elements/Tooltip-Popover', 'authController@tooltip')->middleware('SessionHandler');
Route::get('/dashboard', 'authController@dashboard')->middleware('SessionHandler');


//Apis
Route::prefix('api/v1')->namespace('API')->group(function () {
    // Login
    Route::post('/login','ApiController@postLogin');
    // Register
    Route::post('/register','ApiController@postRegister');
    // Protected with APIToken Middleware
    Route::middleware('APIToken')->group(function () {
      // Logout
      Route::post('/logout','ApiController@postLogout');
    });
  });
