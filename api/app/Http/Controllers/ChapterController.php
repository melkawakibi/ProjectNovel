<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 11-10-2016
 * Time: 18:36
 */

namespace App\Http\Controllers;

use App\model\Chapter;
use App\model\Novel;
use App\Transformers\ChapterTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use Illuminate\Http\Request;

class ChapterController extends ApiController
{

    protected $chapter;
    protected $novel;

    function __construct(Chapter $chapter, Novel $novel)
    {
        $this->chapter = $chapter;
        $this->novel = $novel;
    }

    public function storeChapter(Request $req, $novelId)
    {
        $novel = $this->novel->find($novelId);
        $this->chapter->title = $req->get('title');
        $this->chapter->novel_id = $novel->id;
        $this->chapter->save();
    }

    public function showChapters(Manager $fractal, ChapterTransformer $chapterTransformer, $novelId){

        $chapters = $this->novel->find($novelId)->chapters;
        $collection = new Collection($chapters, $chapterTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function showChapter(Manager $fractal, ChapterTransformer $chapterTransformer, $novelId, $chapterId){

        $chapters = $this->novel->find($novelId)->chapters;
        $chapter = $chapters->find($chapterId);
        $item = new Item($chapter, $chapterTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function showChapterByNovelIdLatestChapter(Manager $fractal, ChapterTransformer $chapterTransformer, $nId){

        $query = Chapter::where('novel_id', $nId)->max('id');
        $id_max = json_encode($query);

        //TODO check null on Novel
        $chapter = $this->chapter->where('novel_id', '=', $nId)
            ->where('id', '=', $id_max)
            ->first();

        $item = new Item($chapter, $chapterTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);

    }

}