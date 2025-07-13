<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Feature;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\PricingCategory;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Affichage(){
         $Features=Feature::all();
        $Services=Service::all();
         $Pricings=Pricing::all();
         $Pricings_item = PricingCategory::with('pricing')->get();
          $projects=Project::latest()->paginate(6);
           $Testimonials = Testimonial::all();
           $infos=info::all();
        return view('pages.Service', compact('Services','Features','Pricings','Pricings_item','projects','Testimonials','infos'));
    }
   public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['show','Affichage']);
       
    }
    public function index()
    {
        $Services=Service::all();
        return view('Services.index' , compact('Services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('Services.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'description'=> 'required',
            'icon'=> 'nullable',
            'text'=> 'required',
            'title_Golobale'=> 'required',
            'photo'=> 'nullable',
           
        ]);

       
     
         // Handle photo1 upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('Services', 'public');
            $validatedData['photo'] = $photoPath;
        }
      if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('Services', 'public');
            $validatedData['icon'] = $iconPath;
        }
        Service::create($validatedData);
    
        return redirect()->route('Services.index');
    }
    
      /**
     * Display the specified resource.
      */

    public function show(string $id)
    {
    //   $Cvs = Cv::paginate(1);
    //     $Testimonials=Testimonial::all();
    //     $Services=Service::where('id', '!=', $id)->latest()->paginate(4);
    //     $user=Service::paginate(1);
    //     $Service = Service::findOrFail($id);
    //     $Settings = Setting::paginate(1);
    //     $teams=team::paginate(1);
    //     return view('Services.show', compact('Service','Services','user','Testimonials',"Settings",'teams','Cvs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Service = Service::findOrFail($id);
        return view('Services.edit', compact('Service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validatedData=$request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'description'=> 'required',
            'icon'=> 'nullable',
            'text'=> 'required',
            'title_Golobale'=> 'required',
            'photo'=> 'nullable',
           

        ]);
       
        $Service=Service::findOrFail($id);

        if($request->hasFile('photo')){
            $photoPath1 = $request->file('photo')->store('Services','public');
            $validatedData['photo']=$photoPath1;
        }
        
         if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('Services', 'public');
            $validatedData['icon'] = $iconPath;
        }

        $Service->update($validatedData);
     
        return to_route('Services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::findOrFail($id)->delete();
        return to_route('Services.index');
    }
}
