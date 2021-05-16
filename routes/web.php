<?php

use Illuminate\Support\Facades\Route;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//dieu huong den trang chu 
Route::get('/', 'PageController@homePage')->name('home.page');

//dieu huong tat ca route khong hop le den page not found
Route::fallback('PageController@pageNotFound')->name('page.not.found');