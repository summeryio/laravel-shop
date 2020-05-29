<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', 'PagesController@root')->name('root');
Route::redirect('/', '/products')->name('root');

Auth::routes(['verify' => true]);

// 收货地址
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

    // 收藏商品
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

    // 购物车
    Route::post('cart', 'CartController@add')->name('cart.add');
    Route::get('cart', 'CartController@index')->name('cart.index');
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

    // 订单相关
    Route::post('orders', 'OrdersController@store')->name('orders.store');
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');

    // 支付相关
    Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
    Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');

    // 确认收货
    Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');

    // 商品评价
    Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
    Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');

    // 用户申请退款
    Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');
});


// 商品列表
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show')->where(['product' => '[0-9]+']);


// 支付服务器端回调
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
