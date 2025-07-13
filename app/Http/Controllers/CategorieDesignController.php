<?php

namespace App\Http\Controllers;

use App\Models\Categorie_Design;
use Illuminate\Http\Request;

class CategorieDesignController extends Controller
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
        $Categorie_Designs=Categorie_Design::all();
      
        return view('Categorie_Designs.index' , compact('Categorie_Designs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categorie_Designs.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);
        
        

  
        Categorie_Design::create($validatedData);
    
        return redirect()->route('Categorie_Designs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Categorie_Designs=Categorie_Design::paginate(2);
        // $Post=Categorie_Design::paginate(4);
        // $Categorie_Design = Categorie_Design::findOrFail($id);
        // return view('Categorie_Designs.show', compact('Categorie_Design','Categorie_Designs','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Categorie_Design = Categorie_Design::findOrFail($id);
        return view('Categorie_Designs.edit', compact('Categorie_Design'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            
           

        ]);
        $Categorie_Design=Categorie_Design::findOrFail($id);
        $Categorie_Design->update($validatedData);
     
        return to_route('Categorie_Designs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categorie_Design::findOrFail($id)->delete();
        return to_route('Categorie_Designs.index');
    }
}
