<?php
namespace App\Transformers;

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 8-10-2016
 * Time: 17:19
 */

use App\model\Novel;
use League\Fractal\TransformerAbstract;

class NovelTransformer extends TransformerAbstract
{

    protected $availableEmbeds = [
        'chapters',
    ];

    public function transform(Novel $novel)
    {
        return [
            'id'          => (int) $novel->id,
            'name'  => (string) $novel->name,
            'author'   => (string) $novel->author,
            'genre'   => (string) $novel->genre,
            'imgUrl'   => (string) $novel->imgUrl,
            'user_id'   => (int) $novel->user_id,
            'chapter' => $novel->chapters,
        ];
    }

}