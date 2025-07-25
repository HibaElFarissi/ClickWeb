<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
      protected $fillable = [
        'name',
        'description',
        'photo',
        'date_final',
        'Start_Date',
        'View_website',
        'Client',
        'images',
        'Categorie_id',
        
    ];

        
    public function categorie(){
        return $this->belongsTo(Categorie::class , 'Categorie_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
