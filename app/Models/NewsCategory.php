<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class NewsCategory extends Model
{
    use HasFactory;
    use HasTranslations;

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

    public $translatable = [
        'name',
        'description',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(News::class);
    }
}
