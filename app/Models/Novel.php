<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Translatable\HasTranslations;

/**
 * @mixin IdeHelperNovel
 */
class Novel extends Model
{
    use HasBaseModel, HasTranslations;

    protected $fillable = [
        'id',
        'original_name',
        'name',
        'novel_type_id',
        'author_id',
        'language_id',
        'data',
        'view_count',
        'rating',
    ];

    protected array $translatable = [
        'name',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function type(): HasOne
    {
        return $this->hasOne(NovelType::class);
    }

    public function author(): HasOne
    {
        return $this->hasOne(Author::class);
    }

    public function language(): HasOne
    {
        return $this->hasOne(Language::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function sources(): BelongsToMany
    {
        return $this->belongsToMany(Source::class)->withPivot('data');
    }
}
