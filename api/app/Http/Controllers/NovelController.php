<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 7-10-2016
 * Time: 13:30
 */

namespace App\Http\Controllers;

use App\Transformers\NovelTransformer;
use Faker\Provider\cs_CZ\DateTime;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use Illuminate\Http\Request;
use App\model\Novel;
use Illuminate\Support\Facades\DB;

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
        $this->novel->genre = $req->get('genre');
        $this->novel->imgUrl = $req->get('imgUrl');
        $this->novel->user_id = $req->get('user_id');
        $this->novel->save();

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

    public function showNovelByUserId(Manager $fractal, NovelTransformer $novelTransformer, $uId)
    {
        //TODO check null on Novel
        $novel = $this->novel->where('user_id', '=', $uId)->first();
        $item = new Item($novel, $novelTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

    public function showNovelByUserIdLatestNovel(Manager $fractal, NovelTransformer $novelTransformer, $uId)
    {
        $query = Novel::where('user_id', $uId)->max('id');
        $id_max = json_encode($query);

        //TODO check null on Novel
        $novel = $this->novel->where('user_id', '=', $uId)
            ->where('id', '=', $id_max)
            ->first();

        $item = new Item($novel, $novelTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

}