<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use App\Models\Categorie_Design;

class DesignsController extends Controller
{
 

    public function Affichage(Request $request){
     
        $Designs=Design::latest()->get();
        $Design_item = Categorie_Design::with('designs')->get();
        return view('pages.Designs',compact('Designs', 'Design_item'));
       }


    
}

