<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_Marketing extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function marketings()
    {
        return $this->hasMany(Marketing::class, 'categorie__marketing_id');
    }
}
