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
// frontend---------
Route::get('/','FrontendController@home')->name('homepage');

Route::get('filteritem','FrontendController@filteritem')->name('filteritem');

Route::get('detail/{id}','FrontendController@detail')->name('detail');

Route::get('checkout','FrontendController@checkout')->name('checkout');

Route::get('login','FrontendController@login')->name('login');

Route::get('profile','FrontendController@profile')->name('profile');

Route::get('register','FrontendController@register')->name('register');


// Backend---------
Route::middleware('role:admin')->group(function () {

Route::get('dashboard','BackendController@dashboard')->name('dashboard');

Route::resource('items','ItemController');
// 7 (get- 4 / post- 1 / put- 1 / delete- 1)

Route::resource('brands','BrandController');

Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController');
});	



Auth::routes();

Route::resource('orders','OrderController');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/getitems','FrontendController@getItems')->name('getitems');
