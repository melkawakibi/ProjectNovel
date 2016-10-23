<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 19:49
 */
namespace App\Service;

interface UserService
{

    public function find($id);
    public function findAll();
    public function create($user);

}