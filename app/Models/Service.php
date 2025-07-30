<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'services';

    protected $fillable = [
        'name',
        'description',
        'body',
        'image',
        'service_icon',
        'slug'
    ];

    protected $guarded = [];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'body' => 'array',
    ];

    public $translatable = [
        'name',
        'description',
        'body'
    ];
}
