<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api'], function($app){

    //Novel
    $app->get('/novels', 'App\Http\Controllers\NovelController@showNovels');
    $app->get('/novels/{id}', 'App\Http\Controllers\NovelController@showNovel');
    $app->post('/novels/create', 'App\Http\Controllers\NovelController@storeNovel');

    //Chapter
    $app->get('/novels/{novelId}/chapters', 'App\Http\Controllers\ChapterController@showChapters');
    $app->get('/novels/{novelId}/chapters/{chapterId}', 'App\Http\Controllers\ChapterController@showChapter');
    $app->post('/novels/{id}/create', 'App\Http\Controllers\ChapterController@storeChapter');

    //Page
    $app->get('/novels/{novelId}/chapters/{chapterId}/pages', 'App\Http\Controllers\PageController@showPages');
    $app->get('/novels/{novelId}/chapters/{chapterId}/pages/{pageId}', 'App\Http\Controllers\PageController@showPage');
    $app->post('/novels/{novelId}/chapters/{chapterId}/create', 'App\Http\Controllers\PageController@storePages');

});