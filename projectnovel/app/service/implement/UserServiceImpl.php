<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 19:51
 */
namespace App\Service\Implement;
use GuzzleHttp\Client;
use Lang;

use App\Service\UserService;

class UserServiceImpl implements UserService
{

    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function find($id)
    {
        $res = $this->client->request('GET', Lang::get('strings.api_users_url') . $id);

        return $res;
    }

    public function findAll()
    {
        $res = $this->client->request('GET', Lang::get('strings.api_users_url'));

        return $res;
    }

    public function create($user)
    {
        // TODO: Implement create() method.
    }
}