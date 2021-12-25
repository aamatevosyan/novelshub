<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @mixin IdeHelperGenreNovel
 */
class GenreNovel extends Pivot
{
    use HasBaseModel;
}
