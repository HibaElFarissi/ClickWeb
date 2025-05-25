<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'photo',
        'text',
        'user_id',
        'article_category_id',
    ];
    public function categorie__article(){
        
        return $this->belongsTo(ArticleCategory::class , 'article_category_id');

    }

    public function user(){
         
        return $this->belongsTo(User::class);

    }
}
