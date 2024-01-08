<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'projects';

    protected $fillable = [
        'cat_id',
        'name',
        'description',
        'slug',
        'body',
        'image',
        'project_link',
        'client_info',
    ];

    protected $guarded = [];

    public $translatable = [
        'name',
        'description',
        'body'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'cat_id', 'id');
    }
}
