<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 18:08
 */

namespace App\model;


class User
{

    protected $tabel = 'user';

    protected $fillable = ['username', 'password', 'email'];

    public function novels()
    {
        return $this->hasMany(Novel::class);
    }

}