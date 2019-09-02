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

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/showall', 'SiteController@index');
// Route::get('/show/{prod}', 'SiteController@show');
Route::resource('showproduct','ShowProductController');
Route::get('/showproduct/{id}/{productCategory_id}', 'ShowProductController@show');

Route::resource('checkout','CheckoutController');

Route::group(['middleware' => ['admin']],function(){
    Route::prefix('admin')->group(function () {
        Route::resource('products','ProductController');
    
        Route::resource('prod_cates','ProdCateController');
        Route::resource('sizes', 'SizeController');

        Route::get('/',function(){
            return view('admin.index');
        });
    });
});

Route::get('cart','CartController@cart');

Route::post('add-to-cart/{id}','CartController@addToCart');


Route::patch('update-cart', 'CartController@update');
 
Route::delete('remove-from-cart', 'CartController@remove');

// Route::resource('prod_cates','ProdCateController');


// Route::resource('products','ProductController');