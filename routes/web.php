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

// Cms
Route::get('cms/dashboard', 'DashboardController@index');
Route::resource('cms/products', 'ProductsController');
Route::resource('cms/orders', 'OrdersController');
Route::resource('cms/menu', 'MenuController');
Route::resource('cms/categories', 'CategoriesController');
Route::resource('cms/users', 'UsersController');
Route::resource('cms/contacts', 'ContactsController');

// Shop
Route::get('shop/{cat}/{item}', 'ShopController@item');
Route::get('shop/{cat}', 'ShopController@products');
Route::get('shop', 'ShopController@index');
Route::get('search/{search}', 'SearchController@search');

// Cart
Route::get('cart/addToCart', 'CartController@addToCart');
Route::get('cart/update', 'CartController@update');
Route::get('cart/checkout', 'CartController@checkout');
Route::get('cart/order', 'CartController@order');

// User
Route::get('user/login', 'UserController@login');
Route::get('user/register', 'UserController@register');
Route::get('user/logout', 'UserController@logout');
Route::get('user/contact', 'ContactController@contacts');

Route::post('user/saveComment', 'ContactController@saveComment');
Route::post('user/loginUser', 'UserController@loginUser');
Route::post('user/registerUser', 'UserController@registerUser');

// Pages 
Route::get('/', 'PagesController@index');
Route::get('gallery', 'PagesController@gallery');
Route::get('game', 'PagesController@memoryGame');
Route::get('{page}', 'PagesController@boot');

