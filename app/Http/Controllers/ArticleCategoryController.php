<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categorie_Articles=ArticleCategory::all();
        
        return view('ArticleCategorys.index' , compact('Categorie_Articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ArticleCategorys.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);
        
        

  
        ArticleCategory::create($validatedData);
    
        return redirect()->route('ArticleCategorys.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $category = ArticleCategory::find($id);
        //   $Settings = Setting::paginate(1);
          $Articles =  $category->blog()->get();
         
        //   $teams=team::paginate(1);
          // Retourner les données à la vue
          return view('ArticleCategorys.show', compact('category','Articles')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Categorie_Article = ArticleCategory::findOrFail($id);
        return view('ArticleCategorys.edit', compact('Categorie_Article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            
           

        ]);
        $Categorie_Article=ArticleCategory::findOrFail($id);
        $Categorie_Article->update($validatedData);
     
        return to_route('ArticleCategorys.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ArticleCategory::findOrFail($id)->delete();
         return to_route('ArticleCategorys.index');
    }
}
