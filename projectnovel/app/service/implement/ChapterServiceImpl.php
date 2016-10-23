<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 19:50
 */
namespace App\Service\Implement;

use App\Service\ChapterService;
use GuzzleHttp\Client;
use Lang;

class ChapterServiceImpl implements ChapterService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function find($nId, $cId)
    {
        $res = $this->client->request('GET', Lang::get('strings.api_novels_url') . $nId . '/chapters/' . $cId);

        return $res;
    }

    public function findAll($nId)
    {
        $res = $this->client->request('GET', Lang::get('strings.api_novels_url') . $nId . '/chapters/');

        return $res;
    }

    public function create($chapter, $nId)
    {
        $res = $this->client->request('POST', Lang::get('strings.api_novels_url') . $nId . '/create', [
            'form_params' => [
                'title' => $chapter->title,
                'novel_id' => $chapter->novel_id,
            ]
        ]);

        return $res;
    }
}