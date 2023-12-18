<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';

    protected  $fillable = [
        'order',
        'title',
        'excerpt',
        'body',
        'image',
        'slug',
        'status',
    ];

    protected $guarded = [];

    protected $casts = [];
}
