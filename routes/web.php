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
Route::resource('site','SiteController');


Route::group(['middleware' => ['admin']],function(){
    Route::prefix('admin')->group(function () {
        Route::resource('products','ProductController');
    
        Route::resource('prod_cates','ProdCateController');
    
        Route::get('/',function(){
            return view('admin.index');
        });
    });
});



// Route::resource('prod_cates','ProdCateController');


// Route::resource('products','ProductController');