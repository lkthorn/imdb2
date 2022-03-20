<?php

use Illuminate\Support\Facades\Route;


Route::get('/search', 'SearchController@search');
Route::post('/findSearch', 'SearchController@findSearch');

Route::get('/', function(){
    return view('index');
});


