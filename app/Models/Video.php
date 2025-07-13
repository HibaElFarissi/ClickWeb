<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
      protected $table ='videos';
    protected $fillable = [
        'name',
        'client',
        'photo',
        'code_video',
        'categorie_video_id',
    ];
    public function categorie_Video(){
        return $this->belongsTo(Categorie_Video::class , 'categorie_video_id');
    }
}
