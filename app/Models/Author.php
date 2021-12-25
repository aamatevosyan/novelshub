<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @mixin IdeHelperAuthor
 */
class Author extends Model
{
    use HasBaseModel, HasTranslations;

    protected $fillable = [
        'id',
        'name',
    ];

    protected array $translatable = [
        'name',
    ];
}
