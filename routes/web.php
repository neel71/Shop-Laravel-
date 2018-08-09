<?php


Route::get('/','welcomeController@index');
Route::get('/category-view/{id}','welcomeController@category');
Route::get('/product-details','welcomeController@productDetails');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/checkout', 'CheckoutController@index');


Route::get('/cart/add', 'CartController@addToCart')->name('home');
Route::get('/cart/show', 'CartController@ShowCart')->name('home');
Route::get('/cart/delete/id', 'CartController@deleteCartProduct');



//category info
Route::get('/category/add', 'CategoryController@createCategory')->middleware('AuthemticateMiddleware');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');
//category info

//Manufacturer 
Route::get('/manufacturer/add','ManufacturerController@createManufacturer');
Route::post('/menufacturer/save','ManufacturerController@saveManufacturer');
Route::get('/manufacturer/manage','ManufacturerController@manageManufacturer');
Route::get('/manufacturer/edit/{id}','ManufacturerController@editManufacturer');
Route::post('/manufacturer/update','ManufacturerController@updateManufacturer');
Route::get('/manufacturer/delete/{id}','ManufacturerController@deleteManufacturer');
//Manufacturer 

//Product 
Route::get('/product/add','ProductController@createProduct');
Route::post('/product/save','ProductController@saveProduct');
Route::get('/product/manage','ProductController@manageProduct');
Route::get('/product/view/{id}','ProductController@viewProduct');
Route::get('/product/edit/{id}','ProductController@editProduct');
Route::post('/product/update','ProductController@updateProduct');
Route::get('/product/delete/{id}','ProductController@deleteProduct');
//Product 
