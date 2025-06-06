<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $Logos = Logo::all();
        return view('Logos.index', compact('Logos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  $Logos = Logo::all();
        return view('Logos.index', compact('Logos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
           
            'photo' => 'nullable',

        ]);




        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoPath1 = $request->file('photo')->store('Logos', 'public');
            $validatedData['photo'] = $photoPath1;
        }


        Logo::create($validatedData);

        return redirect()->route('Logos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Logo = Logo::findOrFail($id);

        $isUpdate = true;
        return view('Logos.edit', compact('Logo', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            
            'photo' => 'nullable',
        ]);


        $Logo = Logo::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath1 = $request->file('photo')->store('Logos', 'public');
            $validatedData['photo'] = $photoPath1;
        }

        $Logo->update($validatedData);

        return to_route('Logos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Logo::findOrFail($id)->delete();
        return to_route('Logos.index');
    }
}
