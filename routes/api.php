<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// About
Route::namespace('API')->group(function(){
    Route::get('about', 'AboutController');
    Route::get('blog', 'BlogController@index');
    Route::get('blog/{blog:slug}', 'BlogController@show');
    Route::get('donwload/cv', 'CvController@index');
});