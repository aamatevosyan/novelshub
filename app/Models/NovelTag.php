<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @mixin IdeHelperNovelTag
 */
class NovelTag extends Pivot
{
    use HasBaseModel;
}
