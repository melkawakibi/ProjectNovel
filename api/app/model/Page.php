<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 11-10-2016
 * Time: 22:18
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $table = 'page';

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}