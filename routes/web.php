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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/view','PagesController@view');
Route::get('/reports','PagesController@reports');
//Route::get('/regcomnb/{{Auth::user()->id}}','PagesController@regcomnb');


Route::resource('posts','PostsController');
Route::resource('uacontrol','UserController');
Route::resource('sacontrol','SAController');
Route::resource('wardpages','WardController');
Route::resource('saviews','SataskController');
Route::resource('suggestions','SuggestionController');

/*
Route::get('/about',function(){
    return view('pages.about');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
