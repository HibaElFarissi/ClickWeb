<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Articles=Article::all();
        // $Settings = Setting::paginate(1);
        return view('Articles.index' , compact('Articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Article = new Article();
        $isUpdate = false;
        $Categories=ArticleCategory::all();
        return view('Articles.from',compact('Categories','Article','isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            
             'text'=> 'required',
            
             'photo'=> 'nullable',
             
             'article_category_id'=>'required',
         ]);
 
         // $validatedData=$request->all();
         $validatedData['user_id'] = Auth::id();
 
          // Handle photo upload
         if ($request->hasFile('photo')) {
             $photoPath1 = $request->file('photo')->store('Articles', 'public');
             $validatedData['photo'] = $photoPath1;
         }
        
         Article::create($validatedData);
     
         return redirect()->route('Articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $Categories=ArticleCategory::all();
        $Categories = ArticleCategory::withCount('blog')->get();
        $Post=Article::where('id', '!=', $id)->latest()->paginate(4);
        $Article = Article::findOrFail($id);
     
        // $Settings = Setting::paginate(1);
        // $teams=team::paginate(1);
        return view('Articles.show', compact('Article','Post','Categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Article = Article::findOrFail($id);
        $Categories = ArticleCategory::all();
        $isUpdate = true;
        return view('Articles.from', compact('Article','Categories','isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
           'title'=> 'required',
            
             
             'text'=> 'required',
            
             'photo'=> 'nullable',
             
             'article_category_id'=>'required',
         ]);
         $validatedDataphoto['user_id'] = Auth::id();

         $Article=Article::findOrFail($id);
         
         if($request->hasFile('photo')){
             $photoPath1 = $request->file('photo')->store('Articles','public');
             $validatedData['photo']=$photoPath1;
         }
         
         $Article->update($validatedData);
      
         return to_route('Articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::findOrFail($id)->delete();
        return to_route('Articles.index');
    }
}
