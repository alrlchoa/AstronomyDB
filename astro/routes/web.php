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

Route::get('pub/paper', 'PubController@paper')->name('pub.paper');

Route::delete('cb/{cb}/{pub}/destroy_pub_relation', ['uses' => 'CBController@destroy_pub_relation'])->name('cb.destroy_pub_relation');
Route::post('cb/add_pub_relation', 'CBController@add_pub_relation')->name('cb.add_pub_relation');
Route::get('cb/{id}/create_pub_relation', ['uses' => 'CBController@create_pub_relation'])->name('cb.create_pub_relation');
Route::post('pub/searchByDOI', 'PubController@searchByDOI')->name('pub.searchByDOI');
Route::post('astro/searchByInstitution', 'AstroController@searchByInstitution')->name('astro.searchByInstitution');
Route::post('astro/searchByUser', 'AstroController@searchByUser')->name('astro.searchByUser');

Route::get('rel/{id}/relation', ['uses'=>'RelationController@relation'])->name('rel.relation');

Route::post('cb/searchID', 'CBController@searchID')->name('cb.searchID');
Route::post('cb/search', 'CBController@search')->name('cb.search');
Route::post('cb/searchByThreshold', 'CBController@searchByThreshold')->name('cb.searchByThreshold');
Route::post('cb/searchByType', 'CBController@searchByType')->name('cb.searchByType');

Route::get('pub/{id}/author', ['uses' => 'PubController@author'])->name('pub.author');
Route::post('pub/{id}/updateAuthor', ['uses' => 'PubController@updateAuthor'])->name('pub.updateAuthor');

Route::post('pub/relation', 'PubController@relation')->name('pub.relation');

Route::get('pub/{id}/showReferencePage', ['uses' => 'PubController@showReferencePage'])->name('pub.showReferencePage');
Route::post('pub/{id}/reference', ['uses' => 'PubController@reference'])->name('pub.reference');

Route::get('pub/{id}/reference', 'PubController@showReferencePage')->name('pub.showReferencePage');
Route::post('pub/reference', 'PubController@reference')->name('pub.reference');

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
Route::resource('admin/astronomers', 'Admin\\AstronomersController');
Route::resource('admin/astronomers', 'Admin\\AstronomersController');
Route::resource('admin/researcher-fellowships', 'Admin\\ResearcherFellowshipsController');

Route::resource('cb','CBController');
Route::resource('astro','AstroController');
Route::resource('pub', 'PubController');
Route::resource('rel','RelationController');

Route::resource('admin/publications', 'Admin\\PublicationsController');
Route::resource('admin/instru-models', 'Admin\\InstruModelsController');
Route::resource('admin/instruments', 'Admin\\InstrumentsController');