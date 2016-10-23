<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 19:49
 */

namespace App\Service;

interface ChapterService
{
    public function find($nId, $cId);
    public function findAll($nId);
    public function create($chapter, $nId);
}