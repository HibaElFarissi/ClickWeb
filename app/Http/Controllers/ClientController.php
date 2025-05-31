<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $Clients = Client::all();
        return view('Clients.index', compact('Clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $Clients = Client::all();
        return view('Clients.index', compact('Clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'photo' => 'nullable',

        ]);




        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoPath1 = $request->file('photo')->store('Clients', 'public');
            $validatedData['photo'] = $photoPath1;
        }


        Client::create($validatedData);

        return redirect()->route('Clients.index');
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
        $Client = Client::findOrFail($id);

        $isUpdate = true;
        return view('Clients.edit', compact('Client', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'photo' => 'nullable',
        ]);


        $Client = Client::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath1 = $request->file('photo')->store('Clients', 'public');
            $validatedData['photo'] = $photoPath1;
        }

        $Client->update($validatedData);

        return to_route('Clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::findOrFail($id)->delete();
        return to_route('Clients.index');
    }
}
