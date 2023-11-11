<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Article_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Categorie::all();
        return view("articles.liste_articles", ['articles'=> $articles, "categories" => $categories]);
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
    public function show($id)
    {
        $article = Article::find($id);
        $categorie = Categorie::where('id', '=', $article->categorie_id)->first();
        // dd($categorie);
        return view('articles.voirplus', ['article'=>$article, 'categorie'=>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categories = Categorie::all();
        return view('articles.modifier_articles', compact('categories', 'article'));
    }
// compact : autre methode de récupérer la variable $categorie il la converti en chaine de caractere 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $article_update = $request->validate([
            'titreArticle' => 'required|string',
            'contenuArticle' => 'required',
            'categorie_id' => 'required'
        ]);
        $article = Article::findOrfail($id);
        $article->update($article_update);
        return Redirect::to('/listearticle');
        // return back() ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::findOrfail($id);
        $article->delete();
        return Redirect::to('/listearticle');

    }
}
