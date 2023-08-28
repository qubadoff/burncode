<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NewsCategory extends Model
{
    use HasFactory;

    protected $table = 'news_categories';

    protected $fillable =[
        'name',
        'description',
        'sort',
        'slug',
        'image'
    ];

    protected $guarded = [];

    protected $casts = [];

    public function posts(): HasMany
    {
        return $this->hasMany(News::class);
    }
}
