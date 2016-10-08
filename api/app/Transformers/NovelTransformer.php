<?php
namespace App\Transformers\NovelTransformer;

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 8-10-2016
 * Time: 17:19
 */

use App\model\Chapter;
use App\model\Novel;
use League\Fractal\TransformerAbstract;

class NovelTransformer extends TransformerAbstract
{

    protected $availableEmbeds = [
        'chapter',
    ];

    public function transform(Novel $novel)
    {
        return [
            'id'          => (int) $novel->id,
            'name'  => (string) $novel->name,
            'author'   => (string) $novel->author,
        ];
    }

    public function embedCheckins(Novel $novel)
    {
        $chapters = $novel->chapters;
        return $this->collection($chapters, new ChapterTransformer());
    }

}