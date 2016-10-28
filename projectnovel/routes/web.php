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

//Home
Route::get('/',  [
    'as' => 'home.list', 'uses' => 'NovelController@showHomeNovels'
]);

Route::get('/popular_novels', function () {
    return view('pages/index/popular_novels');
});

Route::get('/recent_updates', function () {
    return view('pages/index/recent_updates');
});

//Adds
Route::get('/add', function () {
    return view('pages/novel/add');
});

Route::get('/novels/{nId}/add_chapter',  [
    'as' => 'chaper.add', 'uses' => 'ChapterController@showCreateChapter'
]);

Route::get('/add_chapter', function () {
    return view('pages/novel/add_chapter');
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

Route::post('/novels/{nId}/create',  [
    'as' => 'chapter.create', 'uses' => 'ChapterController@createChapter'
]);