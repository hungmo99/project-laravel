<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('',[
        'as'=>'admins.index',
        'uses'=>'Admins\AdminController@index'
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
        Route::get('edit/{id}',[
            'as'=>'category.edits',
            'uses'=>'Admins\CategoryController@edit'
        ]);
        Route::post('update/{id}',[
            'as'=>'category.update',
            'uses'=>'Admins\CategoryController@edit'
        ]);
        Route::get('edit/{id}',[
            'as'=>'category.delete',
            'uses'=>'Admins\CategoryController@delete'
        ]);
    });
});
