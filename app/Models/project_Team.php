<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_Team extends Model
{
    use HasFactory;
    protected $table ='project_team';
    protected $fillable = [
        'project_id',
        'Team_id',
    ];
}
