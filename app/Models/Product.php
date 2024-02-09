<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'body',
        'image',
    ];

    protected $guarded = [];

    protected $casts = [];

    public $translatable = [
        'name',
        'description',
        'body'
    ];
}
