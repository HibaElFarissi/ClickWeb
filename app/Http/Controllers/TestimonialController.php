<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Testimonials = Testimonial::all();
        return view('Testimonials.index', compact('Testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $Testimonials = Testimonial::all();
        return view('Testimonials.index', compact('Testimonials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'work' => 'required',
            'Reviews' => 'required',
            'photo' => 'nullable',

        ]);




        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoPath1 = $request->file('photo')->store('Testimonials', 'public');
            $validatedData['photo'] = $photoPath1;
        }


        Testimonial::create($validatedData);

        return redirect()->route('Testimonials.index');
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
        $Testimonial = Testimonial::findOrFail($id);

        $isUpdate = true;
        return view('Testimonials.edit', compact('Testimonial', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'work' => 'required',
            'Reviews' => 'required',
            'photo' => 'nullable',
        ]);


        $Testimonial = Testimonial::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photoPath1 = $request->file('photo')->store('Testimonials', 'public');
            $validatedData['photo'] = $photoPath1;
        }

        $Testimonial->update($validatedData);

        return to_route('Testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::findOrFail($id)->delete();
        return to_route('Testimonials.index');
    }
}
