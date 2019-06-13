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
Route::post('/admin/comment/header', 'adminComment@updateheader');
// Comment Routes
Route::get('/admin/comment','adminComment@index');
Route::get('/admin/comment/delete/{id}','adminComment@delete');
Route::get('/admin/comment/get', 'adminComment@get');
Route::get('/admin/comment/{id}', 'adminComment@view');
Route::post('/admin/comment','adminComment@save');
Route::post('/admin/comment/update','adminComment@update');
// Admin panel views
Route::get('/admin/contact', function () {return view('admin/contact');})->middleware('auth');
Route::get('/admin/home', function () {return view('admin/home');})->middleware('auth');
Route::get('/admin/blank', function () {return view('admin/blank');})->middleware('auth');
