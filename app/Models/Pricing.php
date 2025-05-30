<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'titre',
        'prix',
        'description',
        'Pricing_category_id',
    ];
     public function categorie__Pricing(){
        
        return $this->belongsTo(PricingCategory::class , 'Pricing_category_id');

    }
}
