<?php

use Illuminate\Support\Facades\Route;

Route::prefix('client')->group(function(){
    Route::get('',[
        'as'=>'client.index',
        'uses'=>'Clients\ClientController@index'
    ]);
    Route::get('category/{slug}.html',[
        'as'=>'client.category',
        'uses'=> 'Clients\ProductController@get_cate'
    ]);
    // Route::get('sort-date',[
    //     'as'=>'client.sort_date',
    //     'uses'=> 'Clients\ProductController@sort_date'
    // ]);
    // Route::get('sort-low-to-high',[
    //     'as'=>'client.sort_low',
    //     'uses'=> 'Clients\ProductController@sort_low_to_high'
    // ]);
    // Route::get('sort-high-to-low',[
    //     'as'=>'client.sort_high',
    //     'uses'=> 'Clients\ProductController@sort_high'
    // ]);
    Route::get('product-detail/{slug}/{id}.html',[
        'as'=>'client.product-detail',
        'uses'=> 'Clients\ProductDetailController@index'
    ]);
    Route::post('feedback/{id}',[
        'as'=>'client.feedback',
        'uses'=> 'Clients\FeedbackController@index'
    ]);
    Route::get('contact',[
        'as'=>'client.contact',
        'uses'=> 'Clients\ContactController@index'
    ]);
    Route::post('contact-post',[
        'as'=>'client.contact_post',
        'uses'=> 'Clients\ContactController@post_contact'
    ]);
    Route::get('login',[
        'as'=>'client.login',
        'uses'=>'clients\ClientController@login'
    ]);
    Route::post('signin', [
        'as'=> 'client.signin',
        'uses'=>'clients\ClientController@signin'
    ]);
    Route::get('register',[
        'as'=>'client.register',
        'uses'=>'clients\ClientController@register'
    ]);
    Route::post('client-register',[
        'as'=>'client.user_register',
        'uses'=>'clients\ClientController@user_register'
    ]);
    Route::get('account',[
        'as'=>'client.account',
        'uses'=>'clients\ClientController@account'
    ]);
    Route::post('change-info/{id}',[
        'as'=>'client.account_update',
        'uses'=>'clients\ClientController@account_update'
    ]);
    Route::post('password-update',[
        'as'=>'client.password_update',
        'uses'=>'clients\ClientController@password_update'
    ]);
    Route::get('client-logout',[
        'as'=>'client.logout',
        'uses'=>'clients\ClientController@logout'
    ]);
    Route::prefix('blog')->group(function(){
        Route::get('',[
            'as'=>'blog.index',
            'uses'=>'clients\BlogController@index'
        ]);
        Route::get('detail/{id}',[
            'as'=>'blog.detail',
            'uses'=>'clients\BlogController@detail'
        ]);
    });
    Route::prefix('wishlist')->group(function(){
        Route::get('',[
            'as'=>'wishlist.index',
            'uses'=>'clients\WishlistController@index'
        ]);
        Route::get('add-wishlist/{id}',[
            'as'=>'wishlist.add',
            'uses'=>'clients\WishlistController@add'
        ]);
        Route::get('remove-wishlist/{id}',[
            'as'=>'wishlist.delete',
            'uses'=>'clients\WishlistController@delete'
        ]);
    });
    Route::prefix('cart')->group(function(){
        Route::get('',[
            'as'=>'cart.index',
            'uses'=>'clients\CartController@index'
        ]);
        Route::get('add-cart/{id}.html',[
            'as'=>'cart.add',
            'uses'=>'clients\CartController@addCart'
        ]);
        Route::post('update-quantity',[
            'as'=>'cart.update-qty',
            'uses'=>'clients\CartController@updateQty'
        ]);
        Route::get('update-cart',[
            'as'=>'cart.update',
            'uses'=>'clients\CartController@updateCart'
        ]);
        Route::get('remove-cart',[
            'as'=>'cart.remove',
            'uses'=>'clients\CartController@removeCart'
        ]);
        Route::get('destroy-cart',[
            'as'=>'cart.destroy',
            'uses'=>'clients\CartController@destroyCart'
        ]);
    });
    Route::get('checkout',[
        'as'=>'client.checkout',
        'uses'=>'clients\CheckoutController@index'
    ]);
    Route::post('order',[
        'as'=>'client.order',
        'uses'=>'clients\CheckoutController@order'
    ]);
    Route::get('view-order',[
        'as'=>'order.view',
        'uses'=>'clients\CheckoutController@view'
    ]);
    Route::get('order-detail/{id}',[
        'as'=>'order.detail',
        'uses'=>'clients\ClientController@order_detail'
    ]);
});
