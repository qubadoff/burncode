<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProjectCategory extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'project_categories';

    protected $fillable = [
        'name',
        'slug',
        'sort'
    ];

    protected $guarded = ['id'];

    public array $translatable = [
        'name'
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
    ];
}
