<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 5-11-2016
 * Time: 18:05
 */

namespace App\Controller;


use App\Model\User;
use App\Service\Implement\UserServiceImpl;
use Illuminate\Http\Request;

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserServiceImpl();
    }

    public function createUser(Request $request){

        $input = $request->all();
        $password = bcrypt($input['password']);

        $user = new User($input['username'], $password, $input['email'], str_random(60));
        $this->userService->create($user);
    }

}