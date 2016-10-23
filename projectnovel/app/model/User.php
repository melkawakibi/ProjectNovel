<?php

namespace App\Model;

class User
{
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;

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
            default:
                echo $name . " Not Found";
        }
    }

}