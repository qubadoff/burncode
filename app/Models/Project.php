<?php

namespace App\Models;

use App\Filament\Resources\ProjectCategoryResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'cat_id', 'id');
    }
}
