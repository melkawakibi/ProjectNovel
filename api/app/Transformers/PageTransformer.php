<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 11-10-2016
 * Time: 23:35
 */

namespace App\Transformers;

use App\model\Page;
use League\Fractal\TransformerAbstract;

class PageTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'chapter',
    ];

    public function transform(Page $page)
    {
        return [
            'id'     => (int) $page->id,
            'text'   => (string) $page->txt,
            'type'   => (string) $page->type,
            'chapter_id'   => (int) $page->chapter_id,
        ];
    }
}