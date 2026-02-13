<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryCard extends Model
{
    protected $fillable = [
        'name',
        'condition_tag',
        'summary',
        'source_url',
        'image_url',
        'disclaimer',
        'is_active'
    ];
}
