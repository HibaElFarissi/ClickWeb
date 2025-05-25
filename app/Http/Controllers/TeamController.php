<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $Teams = Team::all();
        return view('Teams.index', compact('Teams'));
    }

    // Show the form for creating a new resource (if using Blade)
    public function create()
    {
        $Team = new Team();
        $isUpdate = false;
        return view('Teams.from', compact('Team', 'isUpdate'));
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'domain' => 'required',
            'experience' => 'required',
            'description' => 'nullable',
            'github' => 'nullable|url',
            'website' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'numero' => 'required',
            'competitions' => 'nullable',
        ]);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images','public');
            $data['image'] = $imagePath;
        }
        Team::create($data);
        return redirect()->route('Teams.index')->with('success', 'Team created successfully.');
    }

    // Display the specified resource
    public function show(string $id)
    {
        // $Teams=Team::where('id', '!=', $id)->latest()->paginate(3);
        
        $Team = Team::findOrFail($id);
        // $Settings = Setting::paginate(1);
        return view('Teams.show', compact('Team'));
    }

    // Show the form for editing the specified resource (if using Blade)
    public function edit(string $id)
    {
        $Team = Team::findOrFail($id);
        $isUpdate = true;
        return view('Teams.from', compact('Team', 'isUpdate'));
    }
    // Update the specified resource in storage
    public function update(Request $request, Team $Team)
    {
        $data = $request->validate([
            'name' => 'nullable',
            'image' => 'nullable',
            'domain' => 'nullable',
            'experience' => 'nullable',
            'description' => 'nullable',
            'github' => 'nullable|url',
            'website' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'numero' => 'nullable',
            'competitions' => 'nullable',
        ]);
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images','public');
            $data['image'] = $imagePath;
        }
        $Team->update($data);
        return redirect()->route('Teams.index')->with('success', 'Team updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(string $id)
    {
        Team::findOrFail($id)->delete();
        return to_route('Teams.index')->with('success', 'Team entry deleted successfully.');
    }
}
