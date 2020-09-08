<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', 'DashboardController');
    // Manajemen
    Route::get('admin', 'AdminController@index');
    Route::get('admin/{user:email}/edit', 'AdminController@edit');
    Route::patch('admin/{id}', 'AdminController@update');
    //Blogs
    Route::resource('blogs', 'BlogController');
    // About
    Route::get('abouts', 'AboutController@index');
    Route::post('abouts', 'AboutController@store');
    Route::get('abouts/{about:id}/edit', 'AboutController@edit');
    Route::patch('abouts/{about:id}', 'AboutController@update');
});

Route::view('/{any?}', 'layouts.master')->where('any', '.*');
