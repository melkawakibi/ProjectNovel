<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 7-10-2016
 * Time: 13:30
 */

namespace App\Http\Controllers;

use App\Transformers\NovelTransformer\NovelTransformer;
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

    public function store(Request $request)
    {
        $this->novel->name = $request->get('id');
        $this->novel->name = $request->get('name');
        $this->novel->name = $request->get('author');
        $this->novel->save();
    }

    public function show(Manager $fractal, NovelTransformer $novelTransformer, $novelId)
    {
        $novel = $this->novel->find($novelId);
        $item = new Item($novel, $novelTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

}