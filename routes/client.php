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
    Route::post('contact_post',[
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
    Route::post('password_update',[
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
    });
});
