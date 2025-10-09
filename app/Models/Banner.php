<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'description',
        'button1_text',
        'button1_link',
        'button2_text',
        'button2_link',
    ];
}
