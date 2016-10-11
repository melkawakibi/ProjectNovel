<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 7-10-2016
 * Time: 13:30
 */

namespace App\Http\Controllers;

use App\Transformers\ChapterTransformer;
use App\Transformers\NovelTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use Illuminate\Http\Request;
use App\model\Novel;

class NovelController extends ApiController
{

    protected $novel;

    function __construct(Novel $novel)
    {
        $this->novel = $novel;
    }

    public function storeNovel(Request $req)
    {
        $this->novel = new Novel();
        $this->novel->name = $req->get('name');
        $this->novel->author = $req->get('author');
        $this->novel->save();

//        return redirect()->action(
//            'Novel@profile', ['id' => 1]
//        );

    }

    public function showNovels(Manager $fractal, NovelTransformer $novelTransformer)
    {
        $novel = $this->novel->get();
        $collection = new Collection($novel, $novelTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function showNovel(Manager $fractal, NovelTransformer $novelTransformer, $novelId)
    {
        $novel = $this->novel->find($novelId);
        $item = new Item($novel, $novelTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function showChapters(Manager $fractal, ChapterTransformer $chapterTransformer, $novelId){

        $chapter = $this->novel->find($novelId)->chapters;
        $item = new Collection($chapter, $chapterTransformer);
        $collection = $fractal->createData($item)->toArray();
        return $this->respond($collection);
    }


}