<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
    {
        $infos=info::all();
        return view('infos.index' , compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $info = new info();
        $isUpdate = false;
        return view('infos.from',compact('info','isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'address'=> 'required',
            'Phone_1'=> 'required',
            'Phone_2'=> 'required',
            'Email_1'=> 'required',
            'Email_2'=> 'required',
            'facebook'=> 'required',
            'twitter'=> 'required',
            'instagram'=> 'required',
            'linkedin'=> 'required',
            'youtube'=> 'required',
            'slug'=> 'required',
            'experience'=> 'required',
         ]);
        
         info::create($validatedData);
     
         return redirect()->route('infos.index');
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
        $info = info::findOrFail($id);
        $isUpdate = true;
        return view('infos.from', compact('info','isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $validatedData = $request->validate([
            'address'=> 'required',
            'Phone_1'=> 'required',
            'Phone_2'=> 'required',
            'Email_1'=> 'required',
            'Email_2'=> 'required',
            'facebook'=> 'required',
            'twitter'=> 'required',
            'instagram'=> 'required',
            'linkedin'=> 'required',
            'youtube'=> 'required',
            'slug'=> 'required',
             'experience'=> 'required',
         ]);
        
    

         $info=info::findOrFail($id);
         
        
         
         $info->update($validatedData);
      
         return to_route('infos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        info::findOrFail($id)->delete();
        return to_route('infos.index');
    }
}
