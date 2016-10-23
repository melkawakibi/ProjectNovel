<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 23-10-2016
 * Time: 11:51
 */

namespace App\Controller;

use App\Model\Chapter;
use Illuminate\Routing\Controller as BaseController;
use App\Service\Implement\ChapterServiceImpl;
use Illuminate\Http\Request;

class ChapterController extends BaseController
{

    private $chapterService;

    public function __construct()
    {
        $this->chapterService = new ChapterServiceImpl();
    }

    public function showChapter($nId, $cId)
    {
        $res = $this->chapterService->find($nId, $cId);

        return view('pages/')->with(array('chapter' => json_decode($res->getBody(), true)));
    }

//No purpose jet
//    public function showChapters($nId)
//    {
//        $res = $this->chapterService->findAll($nId);
//
//        return view('pages/')->with(array('chapters' => json_decode($res->getBody(), true)));
//    }

    public function createChapter(Request $request, $nId)
    {
        $input = $request->all();
        $chapter = new Chapter($input['title'], $nId);
        $res = $this->chapterService->create($chapter, $nId);

        return view('pages/detail');
    }

}