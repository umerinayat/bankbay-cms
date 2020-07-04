<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/products/create/{catId?}/{catName?}', 'ProductsController@create');

// vendor
Route::post('/company/vendor', 'VendorController@store')->name('vendor.store');
Route::get('/company/vendor', 'VendorController@index')->name('vendor.index');
Route::get('/company/vendor/create', 'VendorController@create')->name('vendor.create');
Route::put('/company/vendor/{vendor}', 'VendorController@update')->name('vendor.update');
Route::delete('/company/vendor/{vendor}', 'VendorController@destroy')->name('vendor.destroy');
Route::get('/company/vendor/{vendor}', 'VendorController@show')->name('vendor.show');
Route::get('/company/vendor/{vendor}/edit', 'VendorController@edit')->name('vendor.edit');

// product filter
Route::get('/product-filter/create', 'ProductsFilterController@create')->name('productFilter.create');
Route::post('/product-filter/store', 'ProductsFilterController@store')->name('productFilter.store');
Route::get('/product-filter/getFilter/{catId}', 'ProductsFilterController@getFilter');



Route::resource('ProductCategory', 'Product\ProductCategoriesController');
Route::resource('product', 'ProductsController');
Route::resource('BlogPostsCategory', 'Blog\BlogPostsCategoryController');
Route::resource('BlogPost', 'Blog\BlogPostsController');


