<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'image',
        'published_at',
        'title',
        'excerpt',
        'content',
        'slug',
    ];

    protected $casts = [
        'published_at' => 'date',
    ];
}
