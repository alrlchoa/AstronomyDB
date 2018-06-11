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

Route::get('/register','PagesController@getRegister');

Route::get('/login','PagesController@getLogin');

Route::get('/team', 'PagesController@getTeam');

Route::get('/about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::resource('admin/institutions', 'Admin\\InstitutionsController');
Route::resource('admin/celestial-bodies', 'Admin\\CelestialBodiesController');
Route::resource('admin/comets', 'Admin\\CometsController');
Route::resource('admin/spectral-brightnesses', 'Admin\\SpectralBrightnessesController');
Route::resource('admin/stars', 'Admin\\StarsController');
Route::resource('admin/planets', 'Admin\\PlanetsController');
Route::resource('admin/moons', 'Admin\\MoonsController');