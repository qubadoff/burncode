<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Offer extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'offers';

    protected  $fillable = [
        'order',
        'title',
        'excerpt',
        'body',
        'image',
        'slug',
        'status',
    ];

    protected $guarded = [];

    protected $casts = [];

    public $translatable = [
        'title',
        'excerpt',
        'body',
    ];
}
