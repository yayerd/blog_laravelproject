<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Article;
use Illuminate\Http\Request;

class Article_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("articles.liste_articles");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        // return view("articles.ajouter_articles", compact("categories"));
        return view("articles.ajouter_articles", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
            $request->validate([
            'titreArticle' => 'required|string',
            'contenuArticle' => 'required',
            'categorie_id' => 'required'
        ]);
        // $article_requete = 
        //  $article = new Article($article_requete);
        // $article->save();
        // return back();
        $categorie = new Article();
        $categorie->titreArticle = $request->get('titreArticle'); 
        $categorie->contenuArticle = $request->get('contenuArticle'); 
        $categorie->categorie_id = $request->get('categorie_id'); 
        $categorie->save();
        return back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
