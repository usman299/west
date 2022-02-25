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

Route::get('/', 'FrontendController@index')->name('front.index');

Route::post('/redeemcoupon', 'FrontendController@redeemcoupon')->name('redeemcoupon');

Route::get('/cart/reset', 'FrontendController@cartReset')->name('cart.reset');
Route::post('/addtocart', 'FrontendController@addtocart')->name('addtocart');
Route::get('/cartitems', 'FrontendController@cartitems')->name('cartitems');
Route::get('/checkout', 'FrontendController@checkout')->name('checkout')->middleware('auth');
Route::post('/checkout/submit', 'FrontendController@checkoutSubmit')->name('checkout.submit')->middleware('auth');
Route::get('/removecart/{id}', 'FrontendController@removecart')->name('removecart');

Route::get('/contact', 'FrontendController@contact')->name('front.contact');
Route::get('/single/product/{id}', 'FrontendController@product')->name('front.product');
Route::get('/blog/view/{id}', 'FrontendController@blog')->name('blog.view');
Route::get('/products', 'FrontendController@products')->name('front.products');
Route::post('/fetchsubcategory', 'CategoryController@fetchsubcategory')->name('fetchsubcategory');

Route::get('/admin/login', 'FrontendController@admin')->name('admin.login');

Auth::routes();

//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function() {
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/general/blog', 'ContentController@blog')->name('general.blog');
Route::get('/general/settings', 'ContentController@settings')->name('general.settings');
Route::get('/general/about', 'ContentController@about')->name('general.about');
Route::get('/general/video', 'ContentController@video')->name('general.video');
Route::get('/general/mission', 'ContentController@mission')->name('general.mission');
Route::get('/general/slider', 'ContentController@slider')->name('general.slider');
Route::post('/general/settings/store', 'ContentController@settingStore')->name('settings.store');
Route::post('/slider/store', 'ContentController@sliderStore')->name('slider.store');
Route::post('/mission/store', 'ContentController@missionStore')->name('mission.store');
Route::post('/video/store', 'ContentController@videoStore')->name('video.store');
Route::post('/about/store', 'ContentController@aboutStore')->name('about.store');
Route::post('/blog/store', 'ContentController@blogStore')->name('blog.store');
Route::get('/blog/delete/{id}', 'ContentController@blogdelete')->name('blog.delete');


    Route::get('/clients/order/index', 'OrderController@clientsindex')->name('admin.clients.order.index');
    Route::get('/clients/order/complete', 'OrderController@clientscomplete')->name('admin.clients.order.complete');

    Route::get('/admin/order/index', 'OrderController@index')->name('admin.order.index');
    Route::get('/admin/order/complete', 'OrderController@complete')->name('admin.order.complete');
    Route::get('/admin/order/view/{id}', 'OrderController@view')->name('admin.order.view');
    Route::get('/admin/order/status/{id}', 'OrderController@status')->name('admin.order.status');

    Route::get('/coupon/index', 'UserController@coupon')->name('coupon.index');
    Route::get('/coupon/delete/{id}', 'UserController@couponDelete')->name('coupon.delete');
    Route::post('/coupon/store', 'UserController@couponstore')->name('coupon.store');
    Route::get('/user/index', 'UserController@index')->name('user.index');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user/store', 'UserController@store')->name('user.store');

    Route::get('/admin/clients/index', 'UserController@clients')->name('admin.clients.index');

    Route::get('/category/index', 'CategoryController@index')->name('category.index');
    Route::get('/category/delete/{id}', 'CategoryController@delete')->name('category.delete');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');

    Route::get('/subcategory/index', 'CategoryController@subcategoryindex')->name('subcategory.index');
    Route::get('/subcategory/delete/{id}', 'CategoryController@subcategorydelete')->name('subcategory.delete');
    Route::post('/subcategory/store', 'CategoryController@subcategorystore')->name('subcategory.store');

    Route::get('/product/index', 'ProductController@index')->name('product.index');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
    Route::post('/product/store', 'ProductController@store')->name('product.store');
    Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');

});

Route::group(['middleware' => ['auth', 'web']], function() {
    Route::get('/order/index', 'FrontendController@orderDetails')->name('order.index');

    Route::get('/user/order/details/{id}', 'FrontendController@orderDetails')->name('user.order-detail');
    Route::get('/user/dashboard', 'FrontendController@userDashboard')->name('user.dashboard');
    Route::post('/user/profileupdate', 'FrontendController@profileupdate')->name('user.profileupdate');
});
