<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $table = 'designs';

    protected $fillable = [
        'name',
        'client', // minuscule recommandé
        'photo',
        'categorie__design_id',
    ];

    public function categorieDesign()
    {
        return $this->belongsTo(Categorie_Design::class, 'categorie__design_id');
    }
}
