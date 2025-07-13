<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Categorie_Video;
use Illuminate\Http\Request;

class VideoController extends Controller
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
        // $Videos_Types=Video::all();
       
        $Videos=Video::all();
        return view('Videos.index' , compact('Videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $Videos_Types=Video::all();
      
        $Categorie_Videos=Categorie_Video::all();
       
        return view('Videos.create',compact('Categorie_Videos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'nullable',
            'photo'=> 'nullable',
            'client'=> 'nullable',
            'code_video'=> 'nullable',
            'categorie_video_id'=>'nullable',
           
        ]);

          if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Designs','public');
            $validatedData['photo'] = $photoPath;
        }
      
        // Store the main photo associated with the Video

      
        $Video = Video::create($validatedData);

        
    
    
        return redirect()->route('Videos.index');
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
        // $Videos_Types=Video::all();
        $Video = Video::findOrFail($id);
     
        $Categorie_Videos=Categorie_Video::all();
        
        return view('Videos.edit', compact('Video','Categorie_Videos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name'=> 'nullable',
            'photo'=> 'nullable',
            'client'=> 'nullable',
            'code_video'=> 'nullable',
            'categorie_video_id'=>'nullable',
           
        ]);
          if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Designs','public');
            $validatedData['photo'] = $photoPath;
        }
        $Video=Video::findOrFail($id);
        $Video->update($validatedData);
        
        
     
        return to_route('Videos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Video::findOrFail($id)->delete();
        return to_route('Videos.index');
    }
}
