<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 18:39
 */

namespace App\Http\Controllers;

use App\Transformers\UserTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use App\model\User;

class UserController extends ApiController
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function showUsers(Manager $fractal, UserTransformer $userTransformer){

        $user = $this->user->get();
        $collection = new Collection($user, $userTransformer);
        $data = $fractal->createData($collection)->toArray();
        return $this->respondWithCORS($data);
    }

    public function showUser(Manager $fractal, UserTransformer $userTransformer, $userId)
    {
        $user = $this->user->find($userId);
        $item = new Item($user, $userTransformer);
        $data = $fractal->createData($item)->toArray();
        return $this->respond($data);
    }

}