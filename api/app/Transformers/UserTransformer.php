<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 23-10-2016
 * Time: 14:34
 */

namespace App\Transformers;

use App\model\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{

    public function transform(User $user)
    {
        return [
            'id'          => (int) $user->id,
            'username'  => (string) $user->username,
            'password'   => (string) $user->password,
            'email'   => (string) $user->email,
        ];
    }

}