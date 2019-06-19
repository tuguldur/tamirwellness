<?php
use Illuminate\Http\Request;
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
    return view('client/index');
});
Route::get('/comment', function () {
    return view('client/comment');
});
Route::get('/contact', function () {
    return view('client/contact');
});
Route::get('/service', function () {
    return view('client/service');
});
Route::get('/blank', function () {
    return view('client/blank');
});
// Client send booking req
Route::get('/book', 'adminBook@save');
// Admin routes
Auth::routes();
Route::get('/admin', 'adminController@index')->name('home');
//Route::get('/admin/book', function () {return view('admin/book');})->middleware('auth');

Route::group(['middleware'=>'auth'], function(){
    // Book Routes
    Route::get('/admin/book', [
        'uses' => 'adminBook@index',
        'middleware' => 'roles',
        'roles' => ['inbox','admin']
    ]);
    Route::get('/admin/book/get', 'adminBook@get');
    Route::get('/admin/book/{id}', 'adminBook@view');
    Route::post('/admin/book/update', 'adminBook@update');

// Comment Header Routes
Route::get('/admin/comment/header', [
    'uses' => 'adminComment@header',
    'middleware' => 'roles',
    'roles' => ['comment','admin']
]);
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
Route::get('/admin/contact',[
    'uses' => 'adminContact@index',
    'middleware' => 'roles',
    'roles' => ['contact','admin']
]);
Route::post('/admin/contact','adminContact@save');
// Home Header Routes
Route::get('/admin/home/', [
    'uses' => 'adminHomeHeader@index',
    'middleware' => 'roles',
    'roles' => ['home','admin']
]);
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
Route::get('/admin/user',[
    'uses' => 'adminUsers@index',
    'middleware' => 'roles',
    'roles' => ['admin']
]);
Route::get('/admin/user/{id}','adminUsers@find');
Route::get('/admin/user/delete/{id}','adminUsers@delete');
Route::post('/admin/user/check/','adminUsers@check');
Route::post('/admin/user/add','adminUsers@add');
// Service Routes
Route::get('/admin/service',[
    'uses' => 'adminService@index',
    'middleware' => 'roles',
    'roles' => ['service', 'admin']
]);
Route::get('/admin/service/create','adminService@create');
// Profile Routes
Route::get('/admin/profile','adminProfile@index');
Route::post('/admin/profile','adminProfile@update');
// Blank Routes
Route::get('/admin/blank','adminBlank@index');
Route::get('/admin/blank/get','adminBlank@get');
Route::post('/admin/blank','adminBlank@save');
// Upload Route
Route::post('/upload_image','adminBlank@upload_image');
Route::post('/upload_video','adminBlank@upload_video');
});//AUTH MIDDLEWARE END


