<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
      public function index()
    {
        $Features=Feature::all();
        return view('Features.index' , compact('Features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('Features.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            
             'description'=> 'required',
            
             'icon'=> 'nullable',
           
         ]);
 


 
          // Handle photo upload
         if ($request->hasFile('icon')) {
             $photoPath1 = $request->file('icon')->store('Features', 'public');
             $validatedData['icon'] = $photoPath1;
         }
         
        
         Feature::create($validatedData);
     
         return redirect()->route('Features.index');
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
        $Feature = Feature::findOrFail($id);
     
        $isUpdate = true;
        return view('Features.edit', compact('Feature','isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
           'title'=> 'required',
            
             'description'=> 'required',
            
             'icon'=> 'nullable',
         ]);


         $Feature=Feature::findOrFail($id);
         
              if ($request->hasFile('icon')) {
             $photoPath1 = $request->file('icon')->store('Features', 'public');
             $validatedData['icon'] = $photoPath1;
         }
         
         $Feature->update($validatedData);
      
         return to_route('Features.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feature::findOrFail($id)->delete();
        return to_route('Features.index');
    }
}
