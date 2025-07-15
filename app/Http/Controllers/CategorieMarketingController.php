<?php

namespace App\Http\Controllers;

use App\Models\Categorie_Marketing;
use Illuminate\Http\Request;

class CategorieMarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
       public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }

    public function index()
    {
        $Categorie_Marketings=Categorie_Marketing::all();
      
        return view('Categorie_Marketings.index' , compact('Categorie_Marketings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categorie_Marketings.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);
        
        

  
        Categorie_Marketing::create($validatedData);
    
        return redirect()->route('Categorie_Marketings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Categorie_Marketing = Categorie_Marketing::findOrFail($id);
        return view('Categorie_Marketings.edit', compact('Categorie_Marketing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            
           

        ]);
        $Categorie_Marketing=Categorie_Marketing::findOrFail($id);
        $Categorie_Marketing->update($validatedData);
     
        return to_route('Categorie_Marketings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categorie_Marketing::findOrFail($id)->delete();
        return to_route('Categorie_Marketings.index');
    }
}
