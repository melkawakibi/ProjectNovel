<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 7-10-2016
 * Time: 13:30
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class NovelController extends Controller
{

    protected $novel;

    function __construct(Nodel $novel)
    {
        $this->novel = $novel;
    }


    public function store(Request $request)
    {
        $novel = $this->novel->name = $request->get('name');
    }


}