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
use Lang;

class NovelServiceImpl implements NovelService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function find($id)
    {
        $res = $this->client->request('GET', Lang::get('strings.api_novels_url') . $id);

        return $res;
    }

    public function findAll()
    {
        $res = $this->client->request('GET', Lang::get('strings.api_novels_url'));

        return $res;
    }

    public function create($novel)
    {

        $res = $this->client->request('POST', Lang::get('strings.api_novels_create_url'), [
            'form_params' => [
                'name' => $novel->name,
                'author' => $novel->author,
                'description' => $novel->description,
                'genre' => $novel->genre,
                'imgUrl' => $novel->imgUrl,
                'user_id' => $novel->user_id,
            ]
        ]);

        return $res;
    }

    public function findNovelByUserId($id)
    {
        $res = $this->client->request('GET', Lang::get('strings.api_novels_url') . 'user/' . $id);

        return $res;
    }

    public function findNovelByUserIdLatestNovel($id)
    {
        $res = $this->client->request('GET', Lang::get('strings.api_novels_url') . 'user/' . $id. '/latest');

        return $res;
    }
}