<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 7-10-2016
 * Time: 13:27
 */

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{

    protected $table = 'novel';


    public function chapters()
    {
           return $this->hasMany(Chapter::class);

    }

}