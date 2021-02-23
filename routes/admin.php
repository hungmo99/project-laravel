<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('',[
        'as'=>'admins.index',
        'uses'=>'Admins\AdminController@index'
    ]);

    Route::get('login-admin',[
        'as'=>'admins.login',
        'uses'=>'Admins\AdminController@login'
    ]);

    Route::post('signin-admin',[
        'as'=>'admins.signin',
        'uses'=>'Admins\AdminController@signin'
    ]);

    Route::get('logout',[
        'as'=>'admins.logout',
        'uses'=>'Admins\AdminController@logout'
    ]);

    Route::prefix('category')->group(function(){
        Route::get('',[
            'as'=>'category.index',
            'uses'=>'Admins\CategoryController@index'
        ]);
        Route::get('create',[
            'as'=>'category.create',
            'uses'=>'Admins\CategoryController@create'
        ]);
        Route::post('store',[
            'as'=>'category.store',
            'uses'=>'Admins\CategoryController@store'
        ]);
        Route::get('edits/{id}',[
            'as'=>'category.edits',
            'uses'=>'Admins\CategoryController@edits'
        ]);
        Route::post('update/{id}',[
            'as'=>'category.update',
            'uses'=>'Admins\CategoryController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'category.delete',
            'uses'=>'Admins\CategoryController@delete'
        ]);
    });

    Route::prefix('info')->group(function(){
        Route::get('',[
            'as'=>'info.index',
            'uses'=>'Admins\InfoController@index'
        ]);
        Route::get('create',[
            'as'=>'info.create',
            'uses'=>'Admins\InfoController@create'
        ]);
        Route::post('store',[
            'as'=>'info.store',
            'uses'=>'Admins\InfoController@store'
        ]);
        Route::get('edits/{id}',[
            'as'=>'info.edits',
            'uses'=>'Admins\InfoController@edits'
        ]);
        Route::post('update/{id}',[
            'as'=>'info.update',
            'uses'=>'Admins\InfoController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'info.delete',
            'uses'=>'Admins\InfoController@delete'
        ]);
    });

    Route::prefix('brand')->group(function(){
        Route::get('',[
            'as'=>'brand.index',
            'uses'=>'Admins\BrandController@index'
        ]);
        Route::get('create',[
            'as'=>'brand.create',
            'uses'=>'Admins\BrandController@create'
        ]);
        Route::post('store',[
            'as'=>'brand.store',
            'uses'=>'Admins\BrandController@store'
        ]);
        Route::get('edits/{id}',[
            'as'=>'brand.edits',
            'uses'=>'Admins\BrandController@edits'
        ]);
        Route::post('update/{id}',[
            'as'=>'brand.update',
            'uses'=>'Admins\BrandController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'brand.delete',
            'uses'=>'Admins\BrandController@delete'
        ]);
    });

    Route::prefix('blog')->group(function(){
        Route::get('',[
            'as'=>'blog.index',
            'uses'=>'Admins\BlogController@index'
        ]);
        Route::get('create',[
            'as'=>'blog.create',
            'uses'=>'Admins\BlogController@create'
        ]);
        Route::post('store',[
            'as'=>'blog.store',
            'uses'=>'Admins\BlogController@store'
        ]);
        Route::get('edits/{id}',[
            'as'=>'blog.edits',
            'uses'=>'Admins\BlogController@edits'
        ]);
        Route::post('update/{id}',[
            'as'=>'blog.update',
            'uses'=>'Admins\BlogController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'blog.delete',
            'uses'=>'Admins\BlogController@delete'
        ]);
    });

    Route::prefix('banner')->group(function(){
        Route::get('',[
            'as'=>'banner.index',
            'uses'=>'Admins\BannerController@index'
        ]);
        Route::get('create',[
            'as'=>'banner.create',
            'uses'=>'Admins\BannerController@create'
        ]);
        Route::post('store',[
            'as'=>'banner.store',
            'uses'=>'Admins\BannerController@store'
        ]);
        Route::get('edits/{id}',[
            'as'=>'banner.edits',
            'uses'=>'Admins\BannerController@edits'
        ]);
        Route::post('update/{id}',[
            'as'=>'banner.update',
            'uses'=>'Admins\BannerController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'banner.delete',
            'uses'=>'Admins\BannerController@delete'
        ]);
    });

    Route::prefix('products')->group(function(){
        Route::get('',[
            'as'=>'products.index',
            'uses'=>'Admins\ProductController@index'
        ]);
        Route::get('create',[
            'as'=>'products.create',
            'uses'=>'Admins\ProductController@create'
        ]);
        Route::post('store',[
            'as'=>'products.store',
            'uses'=>'Admins\ProductController@store'
        ]);
        Route::get('edits/{id}',[
            'as'=>'products.edits',
            'uses'=>'Admins\ProductController@edits'
        ]);
        Route::post('update/{id}',[
            'as'=>'products.update',
            'uses'=>'Admins\ProductController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'products.delete',
            'uses'=>'Admins\ProductController@delete'
        ]);
    });
    Route::prefix('attr')->group(function(){
        Route::get('',[
            'as'=>'attr.index',
            'uses'=>'Admins\AttrController@index'
        ]);
        Route::post('store',[
            'as'=>'attr.store',
            'uses'=>'Admins\AttrController@store'
        ]);
        Route::get('edits/{id}',[
            'as'=>'attr.edits',
            'uses'=>'Admins\AttrController@edits'
        ]);
        Route::post('update/{id}',[
            'as'=>'attr.update',
            'uses'=>'Admins\AttrController@update'
        ]);
        Route::get('delete/{id}',[
            'as'=>'attr.delete',
            'uses'=>'Admins\AttrController@delete'
        ]);
    });
    Route::prefix('product-detail')->group(function(){
        Route::get('/{id}',[
            'as'=>'product-detail.index',
            'uses'=>'Admins\ProductDetailController@index'
        ]);
        Route::get('create',[
            'as'=>'product-detail.create',
            'uses'=>'Admins\ProductDetailController@create'
        ]);
        Route::post('store/{id}',[
            'as'=>'product-detail.store',
            'uses'=>'Admins\ProductDetailController@store'
        ]);
        Route::get('edits/{id}/{id_detail}',[
            'as'=>'product-detail.edits',
            'uses'=>'Admins\ProductDetailController@edits'
        ]);
        Route::post('update/{id}/{id_detail}',[
            'as'=>'product-detail.update',
            'uses'=>'Admins\ProductDetailController@update'
        ]);
        Route::get('delete/{id}/{id_detail}',[
            'as'=>'product-detail.delete',
            'uses'=>'Admins\ProductDetailController@delete'
        ]);
    });
});
