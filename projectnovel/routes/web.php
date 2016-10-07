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

<<<<<<< HEAD
use App\controller\WelcomeController;

Route::get('/', 'WelcomeController@show');

Route::get('/story', 'NovelController@show');



=======
Route::get('/', function () {
    return view('pages/index');
});
>>>>>>> 94a7218562eeadf3e48faeb4c950b02c651a6fe2
