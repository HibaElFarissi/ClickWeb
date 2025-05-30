<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }
    public function Affichage()
    {
          $Faqs = Faq::all();
         return view('pages.FAQ', compact('Faqs'));
    }
    public function index()
    {
        $Faqs = Faq::all();
        return view('Faqs.index', compact('Faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Faq = new Faq();
        $isUpdate = false;
        return view('Faqs.form', compact('Faq', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string',
            
            'answer' => 'required',
        

        ]);
        
        Faq::create($validated);
        return redirect()->route('Faqs.index')->with('success', 'Faq created successfully.');
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
        $Faq = Faq::findOrFail($id);
        $isUpdate = true;
        return view('Faqs.form', compact('Faq', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $Faq)
    {
        $validated = $request->validate([
            'question' => 'required|string',
            
            'answer' => 'required',
        

        ]);
        $Faq->update($validated);
        return redirect()->route('Faqs.index')->with('success', 'Faq updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::findOrFail($id)->delete();
        return to_route('Faqs.index')->with('success', 'Faqs entry deleted successfully.');
    }
}

