<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'description',
        'meta_description',
        'meta_keywords',
        'body',
        'slug',
        'cat_id',
        'author_id',
        'status',
        'image'
    ];

    protected $guarded = [];

    protected $casts = [];

    public $translatable = [
        'title',
        'description',
        'meta_description',
        'meta_keywords',
        'body',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class, 'cat_id', 'id');
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
