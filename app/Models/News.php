<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class, 'cat_id', 'id');
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
