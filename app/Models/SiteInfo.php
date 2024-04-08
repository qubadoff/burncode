<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SiteInfo extends Model
{
    use HasFactory;
    use HasTranslations;

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
        'slider_video_url',
        'footer_js_code',
    ];

    protected $guarded = [];

    protected $casts = [];

    public $translatable = [
        'name',
        'description',
        'location',
    ];
}
