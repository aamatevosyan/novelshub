<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

/**
 * @mixin IdeHelperTag
 */
class Tag extends Model
{
    use HasBaseModel, HasTranslations;

    protected $fillable = [
        'id',
        'name',
    ];

    protected array $translatable = [
        'name',
    ];

    public function novels(): BelongsToMany
    {
        return $this->belongsToMany(Novel::class);
    }
}
