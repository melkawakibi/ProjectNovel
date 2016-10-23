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

Route::get('/add_chapter', function () {
    return view('pages/add_chapter');
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

//Chapter
Route::get('/novels/{id}/chapters',  [
    'as' => 'chapter.list', 'uses' => 'ChapterController@showChapters'
]);
Route::get('/novels/{nId}/chapters/{cId}',  [
    'as' => 'chapter.item', 'uses' => 'ChapterController@showChapter'
]);
Route::get('/novels/{nId}/create',  [
    'as' => 'chapter.create', 'uses' => 'ChapterController@createChapter'
]);