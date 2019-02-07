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

// Home Page - not logged in
Route::get('/', 'PagesController@index')->name('pageIndex');
Route::get('about', 'PagesController@about')->name('pageAbout');
Route::get('contact', 'PagesController@contact')->name('pageContact');

// Authentication Scaffolding
Auth::routes();

// Authenticated Admin Dashboard/Home Page
Route::get('/home', 'HomeController@index')->name('home');

// Projects
Route::resource('projects', 'ProjectsController');
