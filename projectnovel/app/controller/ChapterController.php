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
use App\Service\Implement\PageServiceImpl;
use App\Service\Implement\NovelServiceImpl;
use Illuminate\Http\Request;
use Lang;

class ChapterController extends BaseController
{

    private $chapterService;
    private $pageService;
    private $novelService;

    public function __construct()
    {
        $this->chapterService = new ChapterServiceImpl();
        $this->pageService = new PageServiceImpl();
        $this->novelService = new NovelServiceImpl();
    }

    public function showChapter($nId, $cId)
    {
        $res = $this->chapterService->find($nId, $cId);

        return view('pages/')->with(array('chapter' => json_decode($res->getBody(), true)));
    }

    public function showCreateChapter($id){

        return view('pages/novel/add_chapter')->with(array('id' => $id));
    }

    public function createChapter(Request $request, $nId)
    {
        $input = $request->all();
        $chapter = new Chapter($input['title'], $nId);
        $this->chapterService->create($chapter, $nId);

        $resChapter = $this->chapterService->findChapterByNovelIdLatestChapter($nId);
        $chapter = json_decode($resChapter->getBody(), true);
        $cId = $chapter['data']['id'];

        $this->pageService->create($input, $nId, $cId);

        $resNovel = $this->novelService->find($nId);

        return redirect('/novels/' . $nId)->with(array('novels' => json_decode($resNovel->getBody(), true), 'url' => Lang::get('strings.image_cover_url')));
    }

    public function showPages($nId, $cId){

        $resChapter = $this->chapterService->find($nId, $cId);

        $resPages = $this->pageService->findAll($nId, $cId);

        return view('pages/novel/read_chapter')->with(array('pages' => json_decode($resPages->getBody(), true), 'chapter' => json_decode($resChapter->getBody(), true)));
    }

}