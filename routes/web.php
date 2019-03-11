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

///////////////////////////////////// Product /////////////////////////////

Route::get('productDetails/{productId}','productController@productDetails');//show product details

////////////////////////////// Home Page //////////////////////////////////

Route::get('home','homeController@home');// show Home page
Route::post('showHome','homeController@showHome');// show login Form
Route::get('logout','homeController@logout');// logout user
Route::post('saveRegister','homeController@saveRegister');// show register Form
Route::get('showLogin','homeController@showLogin');//show login page
Route::get('showRegister','homeController@showRegister');//show register page
Route::get('showProfile/{userId}','homeController@showProfile');// show profile
Route::post('updateUser/{userId}','homeController@updateUser');// save user after update

/////////////////////////// Cart Page //////////////////////////

Route::post('addCart','homeController@addCart');//add to cart
Route::get('showCart','homeController@showCart');//show cart details
Route::get('deleteCart/{rowId}','homeController@deleteCart');//delete cart product
Route::post('updateCart','homeController@updateCart');//update cart
Route::get('destroyCart','homeController@destroyCart');//delete cart content
Route::get('checkLogin','homeController@checkLogin');//check login
Route::post('showUser','homeController@showUser');// show user after login
Route::post('makeOrder','homeController@makeOrder');//make order