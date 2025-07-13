<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_Video extends Model
{
    use HasFactory;
     protected $table ='categorie__videos';
    protected $fillable = [
        'name',
       
    ];
    public function video(){
        return $this->hasMany(Video::class, 'categorie_video_id');
    }
}
