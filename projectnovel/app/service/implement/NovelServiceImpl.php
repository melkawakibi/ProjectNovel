<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 19:50
 */
namespace App\Service\Implement;

use App\Service\NovelService;
use GuzzleHttp\Client;

class NovelServiceImpl implements NovelService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function find($id)
    {
        $res = $this->client->request('GET', "localhost:8001/api/novels/$id'");

        return $res;
    }

    public function findAll()
    {
        $res = $this->client->request('GET', 'localhost:8001/api/novels');

        return $res;
    }

    public function create($novel)
    {

        $res = $this->client->request('POST', 'localhost:8001/api/novels/create', [
            'form_params' => [
                'name' => $novel->name,
                'author' => $novel->author,
                'genre' => $novel->genre,
                'imgUrl' => $novel->imgUrl,
                'user_id' => $novel->user_id,
            ]
        ]);

        return $res;
    }
}