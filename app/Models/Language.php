<?php

namespace App\Models;

use App\Traits\HasBaseModel;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasBaseModel;

    protected $fillable = [
        'name',
        'code',
        'locale',
        'rtl'
    ];
}
