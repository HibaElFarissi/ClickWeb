<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Models\PricingCategory;

class PricingController extends Controller
{
   public function index()
    {
        $Pricings=Pricing::all();
        // $Settings = Setting::paginate(1);
        return view('Pricings.index' , compact('Pricings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Pricing = new Pricing();
        $isUpdate = false;
        $Categories=PricingCategory::all();
        return view('Pricings.from',compact('Pricing','isUpdate','Categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type'=> 'required',
            
             'titre'=> 'required',
            
             'prix'=> 'required',
            'Pricing_category_id'=>'required',
             'description'=>'required',
         ]);
        
         Pricing::create($validatedData);
     
         return redirect()->route('Pricings.index');
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
        $Pricing = Pricing::findOrFail($id);
        $isUpdate = true;
           $Categories = PricingCategory::all();
        return view('Pricings.from', compact('Pricing','isUpdate','Categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'type'=> 'required',
            
             'titre'=> 'required',
            
             'prix'=> 'required',
               'Pricing_category_id'=>'required',
             'description'=>'required',
         ]);
    

         $Pricing=Pricing::findOrFail($id);
         
        
         
         $Pricing->update($validatedData);
      
         return to_route('Pricings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pricing::findOrFail($id)->delete();
        return to_route('Pricings.index');
    }
    }
