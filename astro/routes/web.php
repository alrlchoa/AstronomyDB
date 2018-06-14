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
Route::post('cb/searchByUser', 'CBController@searchByUser')->name('cb.searchByUser');
Route::post('cb/searchID', 'CBController@searchID')->name('cb.searchID');
Route::post('cb/search', 'CBController@search')->name('cb.search');
Route::post('cb/searchByThreshold', 'CBController@searchByThreshold')->name('cb.searchByThreshold');
Route::post('cb/searchByType', 'CBController@searchByType')->name('cb.searchByType');


Route::get('/team', 'PagesController@getTeam');

Route::get('/about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/institutions', 'Admin\\InstitutionsController');
Route::resource('admin/celestial-bodies', 'Admin\\CelestialBodiesController');
Route::resource('admin/comets', 'Admin\\CometsController');
Route::resource('admin/spectral-brightnesses', 'Admin\\SpectralBrightnessesController');
Route::resource('admin/stars', 'Admin\\StarsController');
Route::resource('admin/planets', 'Admin\\PlanetsController');
Route::resource('admin/moons', 'Admin\\MoonsController');
Route::resource('admin/galaxies', 'Admin\\GalaxiesController');
Route::resource('admin/publications', 'Admin\\PublicationsController');
Route::resource('admin/astronomers', 'Admin\\AstronomersController');
Route::resource('admin/astronomers', 'Admin\\AstronomersController');
Route::resource('admin/researcher-fellowships', 'Admin\\ResearcherFellowshipsController');

Route::resource('cb','CBController');

