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

// Admin routes
Route::group(['prefix' => 'admin'], function () {

    Auth::routes(['register' => false]);
    Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::resource('users', 'UserController');

    Route::resource('news', 'NewsController');

});

// Front routes
Route::get('/', 'ClientController@index')->name('index');
Route::get('/contact', 'ClientController@contact')->name('contact');
Route::get('/about', 'ClientController@about')->name('about');
Route::get('/blog', 'ClientController@blog')->name('blog');
Route::get('/blog/{slug}', 'ClientController@singleBlog')->name('single-blog');
