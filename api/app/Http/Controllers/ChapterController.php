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
use App\Transformers\NovelTransformer;
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
        $this->chapter->txt = $req->get('txt');
        $this->chapter->novel_id = $novel->id;
        $this->chapter->save();
    }
}