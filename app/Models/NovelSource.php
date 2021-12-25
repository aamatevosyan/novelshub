<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @mixin IdeHelperNovelSource
 */
class NovelSource extends Pivot
{
    use HasBaseModel;

    protected $casts = [
        'data' => 'array'
    ];
}
