<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    private $username;
    private $password;
    private $email;
    private $api_token;

    public function __construct($username, $password, $email, $api_token)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->api_token = $api_token;

    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        switch ($name){

            CASE "username":
                $this->username = $value;
                break;
            CASE "password":
                $this->password = $value;
                break;
            CASE "email":
                $this->email = $value;
                break;
            CASE "api_token":
                $this->api_token = $value;
                break;
            default:
                echo $name . " Not Found";
        }
    }

}