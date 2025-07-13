<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['store']);
       
    }
    public function index()
    {
       
        $Newsletters = Newsletter::all();
        return view('Newsletters.index', compact('Newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
           
            'email'=> 'required',
            
        ]);
        Newsletter::create($validatedData);
      return redirect()->back();

    }

    
    public function destroy(string $id)
    {
        Newsletter::findOrFail($id)->delete();
        return to_route('Newsletters.index');
    }
}
