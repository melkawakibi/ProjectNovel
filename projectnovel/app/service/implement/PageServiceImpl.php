<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 19:51
 */

namespace App\Service\Implement;

use App\Service\PageService;
use GuzzleHttp\Client;
use Lang;

class PageServiceImpl implements PageService
{

    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function find()
    {

    }

    public function findAll()
    {

    }

    public function create($input, $nId, $cId)
    {
        $res = $this->client->request('POST', Lang::get('strings.api_novels_url') . $nId . '/chapters/' . $cId . '/create', [
            'form_params' => [
                'txt' => $input['txt'],
                'type' => 'text',
                'chapter_id' => $cId,
            ]
        ]);

        return $res;
    }
}