<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 7-10-2016
 * Time: 13:45
 */

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{

    protected $table = 'chapter';

    public function novel()
    {
        return $this->belongsTo('App\Novel', 'foreign_key');
    }

}