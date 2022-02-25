<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/websites/order', 'Api\ApiController@order');
Route::get('/website/orders/{status}/{website}', 'Api\ApiController@websiteOrders');
Route::get('/order/details/{id}', 'Api\ApiController@orderDetails');
Route::get('/order/status/{id}', 'Api\ApiController@orderStatus');

Route::get('/products', 'Api\ApiController@products');
Route::get('/product/{id}', 'Api\ApiController@product');

Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Api\UserController@details');
});
