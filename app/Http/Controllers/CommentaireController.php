<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        $articles = Article::all();
        // $commentaires = Commentaire::all(); , 'commentaires' => $commentaires
        return view('commentaires.liste_commentaire', ['articles' => $articles, "categories" => $categories]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        $articles = Article::all();
        return view("commentaires.ajouter_commentaire", ['articles' => $articles, 'categories' => $categories]);
        // $commentaires = Commentaire::all(); , [$commentaires => "commentaires"]
    }
   
    // public function voir()
    // {
    //     $articles = Article::all();
    //     $categories = Categorie::all();
    //     $commentaires = Commentaire::all();
    //     return view("commentaires.ajouter_commentaire", ['articles' => $articles, 'categories' => $categories, 'commentaires' => $commentaires]);
        
    // }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'commentaire' => 'required|string'
        ]);
        $commentaire = new Commentaire();
        $commentaire->commentaire = $request->get('commentaire'); 
        $commentaire->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaire $commentaire)
    {
        $commentaire = Commentaire::find($commentaire);
        $article = Article::where('id', '=', $commentaire->article_id)->first();
        // dd($article);
        return view('commentaires.liste_commentaire', ['article'=>$commentaire, 'article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}
