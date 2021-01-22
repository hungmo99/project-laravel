<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('',[
        'as'=>'admin.index',
        'uses'=>'Admins\AdminController@index'
    ]);
});
