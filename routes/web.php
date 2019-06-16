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
// client routes
Route::get('/', function () {
    return view('client/welcome');
});
Route::get('/contact', function () {
    return view('client/contact');
});
// Client send booking req
Route::get('/book', 'adminBook@save');
// Admin routes
Auth::routes();
Route::get('/admin', 'adminController@index')->name('home');
//Route::get('/admin/book', function () {return view('admin/book');})->middleware('auth');
// Book Routes
Route::get('/admin/book', 'adminBook@index');
Route::get('/admin/book/get', 'adminBook@get');
Route::get('/admin/book/{id}', 'adminBook@view');
Route::post('/admin/book/update','adminBook@update');
// Comment Header Routes
Route::get('/admin/comment/header', 'adminComment@header');
Route::get('/admin/comment/header/{id}', 'adminComment@headerFind');
Route::get('/admin/comment/header/delete/{id}','adminComment@deleteHeader');
Route::post('/admin/comment/header', 'adminComment@updateheader');
// Comment Routes
Route::get('/admin/comment','adminComment@index');
Route::get('/admin/comment/delete/{id}','adminComment@delete');
Route::get('/admin/comment/get', 'adminComment@get');
Route::get('/admin/comment/{id}', 'adminComment@view');
Route::post('/admin/comment','adminComment@save');
Route::post('/admin/comment/update','adminComment@update');
// Contact Routes
Route::get('/admin/contact','adminContact@index');
Route::post('/admin/contact','adminContact@save');
// Home Header Routes
Route::get('/admin/home/', 'adminHomeHeader@index');
Route::get('/admin/home/header','adminHomeHeader@getHeader');
Route::get('/admin/home/header/{id}','adminHomeHeader@find');
Route::get('/admin/home/header/delete/{id}','adminHomeHeader@delete');
Route::post('/admin/home/header','adminHomeHeader@save');
Route::post('/admin/home/header/edit','adminHomeHeader@edit');
// Home Main Routes
Route::get('/admin/home/main','adminHomeMain@get');
Route::get('/admin/home/main/{id}','adminHomeMain@find');
Route::get('/admin/home/main/delete/{id}','adminHomeMain@delete');
Route::post('/admin/home/main','adminHomeMain@save');
// Users Routes
Route::get('/admin/user','adminUsers@index');
Route::get('/admin/user/get','adminUsers@get');
// Admin panel views
Route::get('/admin/blank', function () {return view('admin/blank');})->middleware('auth');
