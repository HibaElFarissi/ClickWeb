<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;
        protected $fillable = [
        'title',
        'description',
        'photo',
        'categorie__marketing_id',
    ];

    public function categoriemarketing()
    {
        return $this->belongsTo(Categorie_Marketing::class, 'categorie__marketing_id');
    }
}
