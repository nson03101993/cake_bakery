<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" prefix group. Now create something great!
|
*/

Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

//Category

Route::group(['middleware' => ['web']], function(){

    //Category
    Route::resource('category', 'CategoryController')->except(['show'])->names([
        'index' => 'category.list',
        'destroy' => 'category.delete'
    ]);

});
