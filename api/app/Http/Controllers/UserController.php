<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 18:39
 */

namespace App\Http\Controllers;


class UserController extends ApiController
{

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

}