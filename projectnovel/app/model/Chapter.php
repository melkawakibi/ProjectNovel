<?php

namespace App\Model;

class Chapter
{

    private $title;
    private $novel_id;

    public function __construct($title, $novel_id)
    {
        $this->title = $title;
        $this->novel_id = $novel_id;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        switch ($name){

            CASE "title":
                $this->title = $value;
                break;
            CASE "novel_id":
                $this->novel_id = $value;
                break;
            default:
                echo $name . " Not Found";
        }

    }

}