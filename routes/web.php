<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('list', 'ListController@index');
Route::post('list', 'ListController@create');
Route::post('delete', 'ListController@delete');
Route::post('update', 'ListController@update');

Route::get('search', 'ListController@search');
