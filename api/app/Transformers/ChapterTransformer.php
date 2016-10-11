<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 8-10-2016
 * Time: 17:34
 */

namespace App\Transformers;

use App\model\Chapter;
use League\Fractal\TransformerAbstract;

class ChapterTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'novel',
        'page',
    ];

    public function transform(Chapter $chapter)
    {
        return [
            'id'     => (int) $chapter->id,
            'title'  => (string) $chapter->title,
            'novel_id'   => (int) $chapter->novel_id,
            'pages' => $chapter->pages,
        ];
    }

}