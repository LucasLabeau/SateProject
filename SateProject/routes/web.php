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
    return view('website.home');
});

Route::group(['middleware' => 'order'], function(){
  Route::get('/products', 'ProductController@index');
  Route::get('/products/create', 'ProductController@uploadFile');
  Route::post('/products', 'ProductController@store');
  Route::get('/products/{id}', 'ProductController@show');
  Route::patch('/products/{id}', 'ProductController@edit');
  Route::delete('/products/{id}', 'ProductController@destroy');
  });
  Route::get('/login', function () {
    return view('Auth.login');
  }) -> name('login');
  Route::get('/register', function () {
    return view('Auth.register');
  }) -> name('register');
  Route::get('/products/create', function() {
    return view('admin.create');
  });

    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');
    Route::post('logout', 'UserController@Logout') -> name('logout');
    Route::get('/products', 'ProductController@index') -> name('products');
    Route::post('/upload-file', 'ProductController@uploadFile');
    Route::get('/products/{product_id}', 'ProductController@show');
    Route::get('/users','UserController@index');
    Route::get('users/{user_id}','UserController@show');
    Route::patch('users/{user_id}','UserController@update');
    Route::get('users/{user_id}/orders','UserController@showOrders');
    Route::patch('products/{product_id}/units/add','ProductController@updateUnits');
    Route::patch('orders/{order}/deliver','OrderController@deliverOrder');
    Route::get('/order', 'OrderController@show') -> name('order');
    Route::post('order', 'OrderController@store');
