<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperSource
 */
class Source extends Model
{
    use HasBaseModel;

    protected $fillable = [
        'id',
        'name',
        'url',
    ];

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }

    public function novels(): BelongsToMany
    {
        return $this->belongsToMany(Novel::class)->withPivot('data');
    }
}
