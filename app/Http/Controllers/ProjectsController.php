<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Team;
use App\Models\Project;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

        public function Affichage()
        {
             $projects = Project::latest()->get();
             $project_item = Categorie::with('project')->get();
            return view('pages.Projects', compact('projects','project_item'));
        }

     public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['show','Affichage']);
       
    }
    public function index()
    {
        // $projects_Types=project::all();
       
        $projects=Project::all();
        return view('projects.index' , compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $projects_Types=project::all();
        $tags=Tag::all();
        $Categories=Categorie::all();
        $Teams=Team::all();
        return view('projects.create',compact('tags','Categories','Teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable',
            'description'=> 'required',
            'date_final'=> 'required',
            'Start_Date'=> 'required',
            'View_website'=> 'required',
            'Client'=> 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'tags.*' => 'nullable|string|max:255',
            'Categorie_id'=>'required',
            'Teams.*' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('images')) {
    $imagePaths = [];
    foreach ($request->file('images') as $image) {
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->store('images', 'public');
        $imagePaths[] = $imagePath;
    }

    // Add the image paths to the validated data
    $validatedData['images'] = json_encode($imagePaths);
}


      
        // Store the main photo associated with the project

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('projects','public');
            $validatedData['photo'] = $photoPath;
        }
        
  
        $project = Project::create($validatedData);

        if ($request->filled('tags')) {
            $tags = $request->input('tags');
            $project->tags()->attach($tags);
        }
        if ($request->filled('teams')) {
            $teams = $request->input('teams');
            $project->teams()->attach($teams);
        }
    
    
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projects=Project::where('id', '!=', $id)->latest()->paginate(3);
     
        $project = Project::findOrFail($id);
        $project->load('teams');
        $project->load('tags');
        // $Settings = Setting::paginate(1);
        $teams=team::paginate(1);
        // $project = project::findOrFail($id);
        return view('projects.show', compact('project','projects', 'teams'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $projects_Types=project::all();
        $project = Project::findOrFail($id);
        $tags=Tag::all();
        $Categories=Categorie::all();
        $Teams=Team::all();
        return view('projects.edit', compact('project','tags','Categories','Teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            'photo'=> 'nullable',
            'description'=> 'required',
            'date_final'=> 'required',
            'Start_Date'=> 'required',
            'View_website'=> 'required',
            'Client'=> 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'tags.*' => 'nullable|string|max:255',
            'Categorie_id'=>'required',
            'Teams.*' => 'nullable|string|max:255',
            
           

        ]);

        if ($request->hasFile('images')) {
    $imagePaths = [];
    foreach ($request->file('images') as $image) {
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->store('images', 'public');
        $imagePaths[] = $imagePath;
    }

    // Add the image paths to the validated data
    $validatedData['images'] = json_encode($imagePaths);
}


      
        // Store the main photo associated with the project

        
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('projects','public');
            $validatedData['photo'] = $photoPath;
        }
        
    
        $project=Project::findOrFail($id);
        $project->update($validatedData);
        
        if ($request->filled('tags')) {
            $tags = $request->input('tags');
            $project->tags()->attach($tags);
        }
        if ($request->filled('members')) {
            $members = $request->input('members');
            $project->members()->attach($members);
        }
     
        return to_route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::findOrFail($id)->delete();
        return to_route('projects.index');
    }
    }
