<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;

    protected $guarded = [];

    protected $casts = [];

    public $translatable = [
        'name',
        'description',
        'body'
    ];
}
