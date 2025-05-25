<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'domain',
        'experience',
        'description',
        'github',
        'website',
        'linkedin',
        'numero',
        'competitions',
    ];
    
}
