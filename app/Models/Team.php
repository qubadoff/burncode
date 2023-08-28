<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'description',
        'facebook_page',
        'instagram_page',
        'twitter_page',
        'linkedin_page',
        'tiktok_page',
        'body',
        'slug',
        'image',
        'sort'
    ];

    protected $guarded = [];

    protected $casts = [];
}
