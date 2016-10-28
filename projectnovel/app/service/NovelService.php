<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 19:48
 */
namespace App\Service;

interface NovelService
{
    public function find($id);
    public function findNovelByUserId($id);
    public function findNovelByUserIdLatestNovel($id);
    public function findAll();
    public function create($novel);
}