<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',  [
    'as' => 'home.list', 'uses' => 'NovelController@showHomeNovels'
]);

Route::get('/add', function () {
    return view('pages/add');
});

//Novel
Route::get('/novels',  [
    'as' => 'novel.list', 'uses' => 'NovelController@showNovels'
]);
Route::get('/novels/{id}',  [
    'as' => 'novel.item', 'uses' => 'NovelController@showNovel'
]);
Route::post('/novels/create',  [
    'as' => 'novel.create', 'uses' => 'NovelController@createNovel'
]);
