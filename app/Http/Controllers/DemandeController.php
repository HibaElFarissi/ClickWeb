<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{

    public function index()
    {
        $Demandes = Demande::all();
       return view('Demandes.index',compact('Demandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
      public function create()
    {
       return view('pages.Demande');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email',
            'site' => 'nullable|string',
            'contactez_nous' => 'required',
            'investissement' => 'required',
            'message' => 'required|string',
        ]);

        Demande::create($request->all());

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Demande::findOrFail($id)->delete();
       return redirect()->back();
    }
}

