<?php

namespace App\Controller;

use App\Model\Novel;
use Illuminate\Routing\Controller as BaseController;
use App\Service\Implement\NovelServiceImpl;
use Illuminate\Http\Request;
use Lang;
use Validator;
use Image;

class NovelController extends BaseController
{

    private $novelService;

    public function showHomeNovels()
    {
        $this->novelService = new NovelServiceImpl();
        $res = $this->novelService->findAll();

        return view('pages/home')->with(array('novels' => json_decode($res->getBody(), true), 'url' => Lang::get('strings.image_url')));
    }

    public function showNovel($id)
    {
        $this->novelService = new NovelServiceImpl();
        $res = $this->novelService->find($id);

        return view('pages/detail')->with(array('novel' => json_decode($res->getBody(), true), 'url' => Lang::get('strings.image_url')));
    }

    public function showNovels()
    {
        $this->novelService = new NovelServiceImpl();
        $res = $this->novelService->findAll();

        return view('hello')->with(array('novels' => json_decode($res->getBody(), true), 'url' => Lang::get('strings.image_url')));
    }

    public function createNovel(Request $request)
    {
        $this->novelService = new NovelServiceImpl();
        $input = $request->all();
        $file = array('image' => $request->file('image'));

        $rules = array('image' => 'required|mimes:jpeg,jpg,png|max:1000');
        $validator = Validator::make($file, $rules);

        if ($validator->fails())
        {
            return response()->json(['error' => $validator->errors()->getMessages()], 400);
        } else
        {
            $image = $file['image'];
            $extension = $file['image']->getClientOriginalExtension(); // getting image extension
            $newFileName = rand(11111,99999).'.'.$extension; // renameing image
            $newPath = Lang::get('strings.image_dir') . $newFileName;
            Image::make($image->getRealPath())->resize(150,200)->save($newPath);
            $novel = new Novel($input['name'], $input['author'], $input['genre'], $newFileName, 1);
            $res = $this->novelService->create($novel);
        };
            //find newest entry with user id
        return view('hello')->with(array());
    }

}