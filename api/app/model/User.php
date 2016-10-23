<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 13-10-2016
 * Time: 18:08
 */

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'user';

    protected $fillable = ['username', 'password', 'email'];

}