<?php

namespace App\Controller;

use App\Model\Novel;
use Illuminate\Routing\Controller as BaseController;
use App\Service\Implement\NovelServiceImpl;
use App\Service\Implement\UserServiceImpl;
use Illuminate\Http\Request;
use Lang;
use Validator;
use Image;

class NovelController extends BaseController
{

    private $novelService;
    private $userService;

    public function __construct()
    {
        $this->novelService = new NovelServiceImpl();
        $this->userService = new UserServiceImpl();
    }

    public function showHomeNovels()
    {
        $res = $this->novelService->findAll();

        return view('pages/index/home')->with(array('novels' => json_decode($res->getBody(), true), 'url' => Lang::get('strings.image_cover_url')));
    }

    public function showNovel($id)
    {
        $res = $this->novelService->find($id);

        return view('pages/novel/detail')->with(array('novel' => json_decode($res->getBody(), true), 'url' => Lang::get('strings.image_cover_url')));
    }

    public function showNovels()
    {
        $res = $this->novelService->findAll();

        return view('hello')->with(array('novels' => json_decode($res->getBody(), true), 'url' => Lang::get('strings.image_cover_url')));
    }

    public function createNovel(Request $request)
    {
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
            Image::make($image->getRealPath())->save($newPath);
            $novel = new Novel($input['name'], $input['author'], $input['genre'], $newFileName, 1);
            $this->novelService->create($novel);
        };

        $user_json_raw = $this->userService->find(1);
        $user_json = json_decode($user_json_raw->getBody(), true);
        $res = $this->novelService->findNovelByUserIdLatestNovel($user_json['data']['id']);

        $novel = json_decode($res->getBody(), true);
        $id = $novel['data']['id'];

        return redirect('/novels/' . $id)->with(array('novels' => json_decode($res->getBody(), true), 'url' => Lang::get('strings.image_cover_url')));
    }

}