<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 8-10-2016
 * Time: 17:34
 */

namespace App\Transformers\NovelTransformer;

use App\model\Chapter;
use App\model\Novel;
use League\Fractal\TransformerAbstract;

class ChapterTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'novel',
    ];

    public function transform(Chapter $chapter)
    {
        return [
            'id'     => (int) $chapter->id,
            'title'  => (string) $chapter->title,
            'text'   => (string) $chapter->text,
            'novel_id'   => (int) $chapter->novel_id,
        ];
    }

    public function embedCheckins(Chapter $chapter)
    {
        $novel = $chapter->novel;
        return $this->item($novel, new NovelTransformer());
    }

}