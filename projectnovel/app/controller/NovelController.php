<?php

namespace App\controller;

use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;


class NovelController extends BaseController{

    public function show(){

        $client = new Client();
        $res = $client->request('GET', 'localhost:8001/api/novels');
        return view('hello')->with('novels', json_decode($res->getBody(), true));
    }

    public function getImage(){

        return view('hello')->with('img', 'http://localhost:8001/images/bookcover.jpg');
    }

}