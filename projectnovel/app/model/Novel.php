<?php

namespace App\Model;

class Novel{

    private $name;
    private $author;
    private $genre;
    private $imgUrl;
    private $user_id;

    public function __construct($name, $author, $genre, $imgUrl, $user_id)
    {
        $this->name = $name;
        $this->author = $author;
        $this->genre = $genre;
        $this->imgUrl = $imgUrl;
        $this->user_id = $user_id;

    }

    public function __get($name)
    {
        return $this->$name;

    }

    public function __set($name, $value)
    {
        switch ($name){

            CASE "name":
                $this->name = $value;
                break;
            CASE "author":
                $this->author = $value;
                break;
            CASE "genre":
                $this->genre = $value;
                break;
            CASE "imgUrl":
                $this->imgUrl = $value;
                break;
            CASE "userId":
                $this->user_id = $value;
                break;

            default:
                echo $name . " Not Found";
        }
    }

}