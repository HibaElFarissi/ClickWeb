<?php

namespace App\Http\Controllers;

use App\Models\PricingCategory;
use Illuminate\Http\Request;

class PricingCategoryController extends Controller
{
    public function index()
    {
        $Categorie_Pricings=PricingCategory::all();
        
        return view('PricingCategory.index' , compact('Categorie_Pricings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PricingCategory.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);
        
        

  
        PricingCategory::create($validatedData);
    
        return redirect()->route('PricingCategory.index');
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
        $Categorie_Pricing = PricingCategory::findOrFail($id);
        return view('PricingCategory.edit', compact('Categorie_Pricing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            
           

        ]);
        $Categorie_Pricing=PricingCategory::findOrFail($id);
        $Categorie_Pricing->update($validatedData);
     
        return to_route('PricingCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PricingCategory::findOrFail($id)->delete();
         return to_route('PricingCategory.index');
    }
}
