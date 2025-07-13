<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    use HasFactory;
      protected $fillable = [
        
            'address',
            'Phone_1',
            'Phone_2',
            'Email_1',
            'Email_2',
            'facebook',
            'twitter',
            'instagram',
            'linkedin',
            'youtube',
            'slug',
            'experience',
    ];
}
