<?php

namespace App\controller;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class NovelController extends BaseController{

    public function show(){

        return View::make('story');

    }

}