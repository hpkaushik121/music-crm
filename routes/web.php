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

Route::get('/', 'authController@login');
Route::get('/signup', 'authController@signup');
Route::get('/forget-password', 'authController@recover');
Route::get('/apps/calender', 'authController@calender');
Route::get('/apps/chat', 'authController@chat');
Route::get('/apps/tickets', 'authController@tickets');
Route::get('/apps/contact', 'authController@contact');
Route::get('/apps/contact-grid', 'authController@contactGrid');
Route::get('/profile/contact-details', 'authController@contactDetails');
Route::get('/genre', 'authController@genre');
Route::get('/albums', 'authController@albums');
Route::get('/albums/add', 'authController@addAlbums');
Route::get('/albums/details-Album', 'authController@detailsAlbum');
Route::get('/artists', 'authController@artists');
Route::get('/artists/details', 'authController@artistDetails');
Route::get('/artists/add', 'authController@addArtist');
Route::get('/audio', 'authController@audio');
Route::get('/audio/add', 'authController@addAudio');
Route::get('/videos', 'authController@videos');
Route::get('/videos/add', 'authController@addVideos');
Route::get('/videos/details', 'authController@videoDetails');
Route::get('/genre/add', 'authController@addGenre');
Route::get('/Ui-Elements/cards', 'authController@cards');
Route::get('/Ui-Elements/User-Card', 'authController@userCards');
Route::get('/Ui-Elements/buttons', 'authController@buttons');
Route::get('/Ui-Elements/modals', 'authController@modals');
Route::get('/Ui-Elements/tabs', 'authController@tabs');
Route::get('/Ui-Elements/Tooltip-Popover', 'authController@tooltip');
Route::get('/dashboard', 'authController@dashboard');
