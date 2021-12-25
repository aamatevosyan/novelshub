<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Model;

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
}
