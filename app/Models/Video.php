<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'url',
        'title',
        'description',
    ];

    public function getThumbnailUrlAttribute()
    {
        if (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', $this->url, $matches)) {
            return 'https://img.youtube.com/vi/' . $matches[1] . '/0.jpg';
        }
        return null;
    }
}
