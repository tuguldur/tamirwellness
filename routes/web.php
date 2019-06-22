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
Route::get('/',  'Client\index@index');
Route::get('/service','Client\service@index');
Route::get('/service/{id}','Client\service@find');
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
Route::post('/book', 'adminBook@save');
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
Route::get('/admin/comment/header','adminComment@header');
Route::get('/admin/comment/header/{id}', 'adminComment@headerFind');
Route::get('/admin/comment/header/delete/{id}','adminComment@deleteHeader');
Route::post('/admin/comment/header', 'adminComment@updateheader');
// Comment Routes
Route::get('/admin/comment',[
    'uses' => 'adminComment@index',
    'middleware' => 'roles',
    'roles' => ['comment','admin']
]);
Route::get('/admin/comment/english/delete/{id}','adminComment@deleteEnglish');
Route::get('/admin/comment/english/get', 'adminComment@getEnglish');
Route::get('/admin/comment/english/{id}', 'adminComment@viewEnglish');
Route::post('/admin/comment/english','adminComment@saveEnglish');
Route::post('/admin/comment/english/update','adminComment@updateEnglish');
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
// GET ALL DATA
Route::get('/admin/service/english/get','adminService@getEnglish');
Route::get('/admin/service/mongolia/get','adminService@getMongolia');
// SAVE 
Route::post('/admin/service/english','adminService@saveEnglish');
Route::post('/admin/service/mongolia','adminService@saveMongolia');
// DELETE BY ID
Route::get('/admin/service/english/delete/{id}','adminService@deleteEnglish');
Route::get('/admin/service/mongolia/delete/{id}','adminService@deleteMongolia');
// FIND BY ID
Route::get('/admin/service/english/{id}','adminService@findEnglish');
Route::get('/admin/service/mongolia/{id}','adminService@findMongolian');

// Profile Routes
Route::get('/admin/profile','adminProfile@index');
Route::post('/admin/profile','adminProfile@update');
// Blank Routes
Route::get('/admin/blank',[
    'uses'=>'adminBlank@index',
    'middleware'=>'roles',
    'roles'=>['blank','admin']
]);
Route::get('/admin/blank/get','adminBlank@get');
Route::post('/admin/blank','adminBlank@save');
// Upload Route
Route::post('/upload_image','adminBlank@upload_image');
Route::post('/upload_video','adminBlank@upload_video');
});//AUTH MIDDLEWARE END


