<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 12-10-2016
 * Time: 00:04
 */

namespace App\Http\Controllers;


use App\model\Chapter;
use App\model\Page;
use App\model\Novel;
use App\Transformers\PageTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use Illuminate\Http\Request;

class PageController extends ApiController
{
    private $page;
    private $chapter;
    private $novel;

    public function __construct(Page $page, Chapter $chapter, Novel $novel)
    {
        $this->page = $page;
        $this->chapter = $chapter;
        $this->novel = $novel;
    }

    public function storePages(Request $req, $novelId, $chapterId)
    {
        $chapters = $this->novel->find($novelId)->chapters;
        $chapter = $chapters->find($chapterId);
        $txt = $req->get('txt');
        $type = $req->get('type');
        foreach($txt as $index => $value ) {
            $this->page = new Page();
            $this->page->txt = $value;
            $this->page->type = $type[$index];
            $this->page->chapter_id = $chapter->id;
            $this->page->save();
        }
    }

    public function showPages(Manager $fractal, PageTransformer $pageTransformer, $novelId, $chapterId){

        $chapters = $this->novel->find($novelId)->chapters;
        $pages = $chapters->find($chapterId)->pages;
        $collection = new Collection($pages, $pageTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respond($data);
    }

    public function showPage(Manager $fractal, PageTransformer $pageTransformer, $novelId, $chapterId, $pageId){

        $chapters = $this->novel->find($novelId)->chapters;
        $pages = $chapters->find($chapterId)->pages;
        $page = $pages->find($pageId);
        $item = new Item($page, $pageTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }
}