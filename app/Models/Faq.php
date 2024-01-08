<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'faqs';

    protected $fillable = [
        'name',
        'body',
        'sort'
    ];

    protected $guarded = [];

    protected $casts = [];

    public $translatable = [
        'name',
        'body'
    ];
}
