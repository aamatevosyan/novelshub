<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @mixin IdeHelperLanguageSource
 */
class LanguageSource extends Pivot
{
    use HasBaseModel;
}
