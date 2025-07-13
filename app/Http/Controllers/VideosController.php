<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Categorie_Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    
   public function Affichage(Request $request){
        
        $Videos=Video::latest()->get();
        $Video_item = Categorie_Video::with('video')->get();
        return view('pages.Videos',compact('Videos','Video_item'));
       }


    
}
