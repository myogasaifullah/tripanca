<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'visi_title',
        'visi_content',
        'misi_title',
        'misi_content',
        'item1_icon',
        'item1_title',
        'item1_content',
        'item2_icon',
        'item2_title',
        'item2_content',
        'item3_icon',
        'item3_title',
        'item3_content',
        'item4_icon',
        'item4_title',
        'item4_content',
    ];
}
