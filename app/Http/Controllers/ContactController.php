<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function Affichage()
    {
        //
        return view('pages.Contact');
    }

     public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['create','store','Affichage']);
       
    }
    public function index()
    {
       
        $Contacts = Contact::all();
        return view('Contacts.index', compact('Contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.Contact');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'mobile'=> 'required',
            'subject'=> 'nullable',
            'message'=> 'required',
        ]);
        Contact::create($validatedData);
        return redirect()->route('Contact');
    }

    
    public function destroy(string $id)
    {
        Contact::findOrFail($id)->delete();
        return to_route('Contacts.index');
    }
}

