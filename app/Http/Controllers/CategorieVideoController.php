<?php

namespace App\Http\Controllers;

use App\Models\Categorie_Video;
use Illuminate\Http\Request;

class CategorieVideoController extends Controller
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
        $Categorie_Videos=Categorie_Video::all();
       
        return view('Categorie_Videos.index' , compact('Categorie_Videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categorie_Videos.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);
        
        

  
        Categorie_Video::create($validatedData);
    
        return redirect()->route('Categorie_Videos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Categorie_Videos=Categorie_Video::paginate(2);
        // $Post=Categorie_Video::paginate(4);
        // $Categorie_Video = Categorie_Video::findOrFail($id);
        // return view('Categorie_Videos.show', compact('Categorie_Video','Categorie_Videos','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Categorie_Video = Categorie_Video::findOrFail($id);
        return view('Categorie_Videos.edit', compact('Categorie_Video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            
           

        ]);
        $Categorie_Video=Categorie_Video::findOrFail($id);
        $Categorie_Video->update($validatedData);
     
        return to_route('Categorie_Videos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categorie_Video::findOrFail($id)->delete();
        return to_route('Categorie_Videos.index');
    }
}
