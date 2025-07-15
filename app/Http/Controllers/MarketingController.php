<?php

namespace App\Http\Controllers;
use App\Models\Categorie_Marketing;
use App\Models\Marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
     
      $this->middleware(['auth','role:admin'])->except(['show','Affichage']);
       
    }
    
        public function Affichage()
        {
             $marketings = Marketing::latest()->get();
             $marketing_item = Categorie_Marketing::with('marketings')->get();
            return view('pages.Marketing', compact('marketings','marketing_item'));
        }
    public function index()
    {
        // $Marketings_Types=Marketing::all();
       
        $Marketings=Marketing::all();
        return view('Marketings.index' , compact('Marketings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $Marketings_Types=Marketing::all();
      
        $Categorie_Marketings=Categorie_Marketing::all();
       
        return view('Marketings.create',compact('Categorie_Marketings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'photo'=> 'nullable',
            'description'=> 'required',
            'categorie__marketing_id'=>'required',
           
        ]);

        
      
        // Store the main photo associated with the Marketing

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Marketings','public');
            $validatedData['photo'] = $photoPath;
        }
        
  
        $Marketing = Marketing::create($validatedData);

        
    
    
        return redirect()->route('Marketings.index');
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
        // $Marketings_Types=Marketing::all();
        $Marketing = Marketing::findOrFail($id);
     
        $Categorie_Marketings=Categorie_Marketing::all();
        
        return view('Marketings.edit', compact('Marketing','Categorie_Marketings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'photo'=> 'nullable',
            'description'=> 'required',
            'categorie__marketing_id'=>'required',
           
           
        ]);

        
      
        // Store the main photo associated with the Marketing

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Marketings','public');
            $validatedData['photo'] = $photoPath;
        }
        
        
    
        $Marketing=Marketing::findOrFail($id);
        $Marketing->update($validatedData);
        
        
     
        return to_route('Marketings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Marketing::findOrFail($id)->delete();
        return to_route('Marketings.index');
    }
}
