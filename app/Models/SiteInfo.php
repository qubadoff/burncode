<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    protected $table = 'site_infos';

    protected $fillable = [
        'id',
        'name',
        'description',
        'email',
        'phone',
        'location',
        'logo',
        'logo2',
        'facebook_page',
        'instagram_page',
        'twitter_page',
        'linkedin_page',
        'tiktok_page',
        'youtube_page',
        'slider_video_url'
    ];

    protected $guarded = [];
}
