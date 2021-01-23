<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admins')->group(function(){
    Route::get('',[
        'as'=>'admins.index',
        'uses'=>'Admins\AdminController@index'
    ]);

    Route::prefix('category')->group(function(){
        Route::get('',[
            'as'=>'category.index',
            'uses'=>'Admins\CategoryController@index'
        ]);
        Route::get('add-cate',[
            'as'=>'category.add',
            'uses'=>'Admins\CategoryController@add'
        ]);
    });
});
