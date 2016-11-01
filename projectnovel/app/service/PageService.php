<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 19:50
 */
namespace App\Service;

interface PageService
{
    public function find($nId, $cId, $pId);
    public function findAll($nId, $cId);
    public function create($page, $nId, $cId);
}