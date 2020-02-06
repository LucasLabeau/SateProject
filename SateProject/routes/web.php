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
    return view('home');
});

Route::group(['middleware' => 'order'], function(){
  Route::get('/products', 'ProductsController@index');
  Route::get('/products/create', 'ProductsController@uploadFile');
  Route::post('/products', 'ProductsController@store');
  Route::get('/products/{id}', 'ProductsController@show');
  Route::patch('/products/{id}', 'ProductsController@edit');
  Route::delete('/products/{id}', 'ProductsController@destroy');
  });
  Route::get('/login', function () {
    return view('login');
  });
  Route::get('/register', function () {
    return view('register');
  });


    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');
    Route::get('/products', 'ProductController@index');
    Route::post('/upload-file', 'ProductController@uploadFile');
    Route::get('/products/{product}', 'ProductController@show');
    Route::get('/users','UserController@index');
    Route::get('users/{user}','UserController@show');
    Route::patch('users/{user}','UserController@update');
    Route::get('users/{user}/orders','UserController@showOrders');
    Route::patch('products/{product}/units/add','ProductController@updateUnits');
    Route::patch('orders/{order}/deliver','OrderController@deliverOrder');
