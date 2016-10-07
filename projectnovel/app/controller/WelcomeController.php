<?php

namespace App\controller;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class WelcomeController extends BaseController
{

    public function show(){

        $array = [
            "el Kawakibi" => [
                "Mohamed",
                "Anass",
            ]
        ];

        return View::make('welcome')->with('data', $array);

    }


}