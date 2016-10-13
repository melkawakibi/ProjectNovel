<?php

namespace App\Controller;

use App\Model\Novel;
use Illuminate\Routing\Controller as BaseController;
use App\Service\Implement\NovelServiceImpl;

class NovelController extends BaseController
{

    private $novelService;

    public function showNovel($id)
    {
        $imageUrlBase = 'http://localhost:8001/images/';
        $this->novelService = new NovelServiceImpl();
        $res = $this->novelService->find($id);

        return view('pages/detail')->with(array('novel' => json_decode($res->getBody(), true), 'url' => $imageUrlBase));
    }

    public function showNovels()
    {
        $imageUrlBase = 'http://localhost:8001/images/';
        $this->novelService = new NovelServiceImpl();
        $res = $this->novelService->findAll();

        return view('hello')->with(array('novels' => json_decode($res->getBody(), true), 'url' => $imageUrlBase));
    }

    public function createNovel()
    {
        $this->novelService = new NovelServiceImpl();
        $novel = new Novel('Singer', 'B. Darin', 'Music', 'bookcover.jpg', 1);
        $res = $this->novelService->create($novel);

        return view('hello')->with('success', $res->getStatusCode());
    }

}