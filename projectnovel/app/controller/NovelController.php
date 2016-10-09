<?php

namespace App\controller;

use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;


class NovelController extends BaseController{

    public function show(){

        $client = new Client();
        $res = $client->request('GET', 'localhost:8001/api/novels');
        return json_decode($res->getBody(), true);
    }

}