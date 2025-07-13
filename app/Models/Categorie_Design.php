<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_Design extends Model
{
    use HasFactory;
       protected $table = 'categorie__designs'; // OK si c’est bien le nom exact de ta table

    protected $fillable = [
        'name',
    ];

    public function designs()
    {
        return $this->hasMany(Design::class, 'categorie__design_id');
    }
}
