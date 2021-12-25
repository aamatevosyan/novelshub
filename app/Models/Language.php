<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperLanguage
 */
class Language extends Model
{
    use HasBaseModel;

    protected $fillable = [
        'id',
        'name',
        'code',
        'locale',
        'rtl',
    ];

    public function sources(): BelongsToMany
    {
        return $this->belongsToMany(Source::class);
    }
}
