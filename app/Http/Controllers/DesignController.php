<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Categorie_Design;
use Illuminate\Http\Request;

class DesignController extends Controller
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
        // $Designs_Types=Design::all();
       
        $Designs=Design::all();
        return view('Designs.index' , compact('Designs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $Designs_Types=Design::all();
      
        $Categorie_Designs=Categorie_Design::all();
       
        return view('Designs.create',compact('Categorie_Designs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable',
            'client'=> 'nullable',
            'categorie__design_id'=>'required',
           
        ]);

        
      
        // Store the main photo associated with the Design

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Designs','public');
            $validatedData['photo'] = $photoPath;
        }
        
  
        $Design = Design::create($validatedData);

        
    
    
        return redirect()->route('Designs.index');
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
        // $Designs_Types=Design::all();
        $Design = Design::findOrFail($id);
     
        $Categorie_Designs=Categorie_Design::all();
        
        return view('Designs.edit', compact('Design','Categorie_Designs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable',
            'client'=> 'nullable',
            'categorie__design_id'=>'required',
           
        ]);

        
      
        // Store the main photo associated with the Design

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Designs','public');
            $validatedData['photo'] = $photoPath;
        }
        
        
    
        $Design=Design::findOrFail($id);
        $Design->update($validatedData);
        
        
     
        return to_route('Designs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Design::findOrFail($id)->delete();
        return to_route('Designs.index');
    }
}
