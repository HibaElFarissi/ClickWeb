<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\Feature;
use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Models\PricingCategory;

class AboutController extends Controller
{
/**
     * Display a listing of the resource.
     */

    public function Affichage()
    {
        //
        $Features=Feature::all();
        $Teams=Team::all();
        $Abouts=About::all();
         $Pricings=Pricing::all();
         $Pricings_item = PricingCategory::with('pricing')->get();
        return view('Pages.About' , compact('Abouts','Features','Teams','Pricings','Pricings_item'));
    }

       public function index()
    {
        $Abouts=About::all();
        // $Settings = Setting::paginate(1);
        return view('Abouts.index' , compact('Abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $About = new About();
        $isUpdate = false;
        return view('Abouts.from',compact('About','isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_1' => 'required',
            'slug_1' => 'required',
            'photo_1' => 'nullable',
            'photo_2' => 'nullable',
            'name_chairman' => 'required',
            'work_chairman' => 'required',
            'slug_chairman' => 'required',
            'photo_chairman' => 'nullable',
            'title_2' => 'required',
            'slug_2' => 'required',
            'our_vision' => 'required',
            'our_mission' => 'required',
            'title_philosophy' => 'required',
            'supervision_post' => 'required',
            'supervision_slug' => 'required',
            'supervision_photo' => 'nullable',
            'strength_post' => 'required',
            'strength_slug' => 'required',
            'strength_photo' => 'nullable',
            'quality_post' => 'required',
            'quality_slug' => 'required',
            'quality_photo' => 'nullable',
            'title_3' => 'required',
            'title_team' => 'required',
            'slug_team' => 'required',
            'title_project' => 'required',
            'slug_project' => 'required',
            'title_pricing' => 'required',
            'slug_pricing' => 'required',
         ]);
 

      
 
          // Handle photo upload
         if ($request->hasFile('photo_1')) {
             $photoPath1 = $request->file('photo_1')->store('Abouts', 'public');
             $validatedData['photo_1'] = $photoPath1;
         }
           if ($request->hasFile('photo_2')) {
             $photoPath2 = $request->file('photo_2')->store('Abouts', 'public');
             $validatedData['photo_2'] = $photoPath2;
         }
           if ($request->hasFile('photo_chairman')) {
             $photoPath3 = $request->file('photo_chairman')->store('Abouts', 'public');
             $validatedData['photo_chairman'] = $photoPath3;
         }
           if ($request->hasFile('supervision_photo')) {
             $photoPath4 = $request->file('supervision_photo')->store('Abouts', 'public');
             $validatedData['supervision_photo'] = $photoPath4;
         }
           if ($request->hasFile('strength_photo')) {
             $photoPath5 = $request->file('strength_photo')->store('Abouts', 'public');
             $validatedData['strength_photo'] = $photoPath5;
         }
           if ($request->hasFile('quality_photo')) {
             $photoPath6 = $request->file('quality_photo')->store('Abouts', 'public');
             $validatedData['quality_photo'] = $photoPath6;
         }
        
         About::create($validatedData);
     
         return redirect()->route('Abouts.index');
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
        $About = About::findOrFail($id);
     
        $isUpdate = true;
        return view('Abouts.from', compact('About','isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
                  'title_1' => 'required',
            'slug_1' => 'required',
            'photo_1' => 'nullable',
            'photo_2' => 'nullable',
            'name_chairman' => 'required',
            'work_chairman' => 'required',
            'slug_chairman' => 'required',
            'photo_chairman' => 'nullable',
            'title_2' => 'required',
            'slug_2' => 'required',
            'our_vision' => 'required',
            'our_mission' => 'required',
            'title_philosophy' => 'required',
            'supervision_post' => 'required',
            'supervision_slug' => 'required',
            'supervision_photo' => 'nullable',
            'strength_post' => 'required',
            'strength_slug' => 'required',
            'strength_photo' => 'nullable',
            'quality_post' => 'required',
            'quality_slug' => 'required',
            'quality_photo' => 'nullable',
            'title_3' => 'required',
            'title_team' => 'required',
            'slug_team' => 'required',
            'title_project' => 'required',
            'slug_project' => 'required',
            'title_pricing' => 'required',
            'slug_pricing' => 'required',
         ]);
         

         $About=About::findOrFail($id);
         
          // Handle photo upload
         if ($request->hasFile('photo_1')) {
             $photoPath1 = $request->file('photo_1')->store('Abouts', 'public');
             $validatedData['photo_1'] = $photoPath1;
         }
           if ($request->hasFile('photo_2')) {
             $photoPath2 = $request->file('photo_2')->store('Abouts', 'public');
             $validatedData['photo_2'] = $photoPath2;
         }
           if ($request->hasFile('photo_chairman')) {
             $photoPath3 = $request->file('photo_chairman')->store('Abouts', 'public');
             $validatedData['photo_chairman'] = $photoPath3;
         }
           if ($request->hasFile('supervision_photo')) {
             $photoPath4 = $request->file('supervision_photo')->store('Abouts', 'public');
             $validatedData['supervision_photo'] = $photoPath4;
         }
           if ($request->hasFile('strength_photo')) {
             $photoPath5 = $request->file('strength_photo')->store('Abouts', 'public');
             $validatedData['strength_photo'] = $photoPath5;
         }
           if ($request->hasFile('quality_photo')) {
             $photoPath6 = $request->file('quality_photo')->store('Abouts', 'public');
             $validatedData['quality_photo'] = $photoPath6;
         }
        
         
         $About->update($validatedData);
      
         return to_route('Abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        About::findOrFail($id)->delete();
        return to_route('Abouts.index');
    }
}
