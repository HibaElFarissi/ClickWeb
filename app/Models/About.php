<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title_1',
        'slug_1',
        'photo_1',
        'photo_2',
        'name_chairman',
        'work_chairman',
        'slug_chairman',
        'photo_chairman',
        'title_2',
        'slug_2',
        'our_vision',
        'our_mission',
        'title_philosophy',
        'supervision_post',
        'supervision_slug',
        'supervision_photo',
        'strength_post',
        'strength_slug',
        'strength_photo',
        'quality_post',
        'quality_slug',
        'quality_photo',
        'title_3',
        'title_team',
        'slug_team',
        'title_project',
        'slug_project',
        'title_pricing',
        'slug_pricing',
    ];
}
