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


$app->get('/novels', 'App\Http\Controllers\NovelController@showNovels');
$app->get('/novels/{id}', 'App\Http\Controllers\NovelController@showNovel');
$app->get('/novels/{novelId}/chapters', 'App\Http\Controllers\ChapterController@showChapters');
$app->get('/novels/{novelId}/chapters/{chapterId}', 'App\Http\Controllers\ChapterController@showChapter');
$app->post('/novels/create', 'App\Http\Controllers\NovelController@storeNovel');
$app->post('/novels/{id}/create', 'App\Http\Controllers\ChapterController@storeChapter');

});