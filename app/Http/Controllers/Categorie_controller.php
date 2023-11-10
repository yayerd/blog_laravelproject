<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class Categorie_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.liste_categorie', [ "categories"=>$categories ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.ajouter_categorie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // htmlspecialchars($nomCategorie) $nomCategorie = 
        $request->validate([
            'nomCategorie'=>'required|string|max:20'
        ]);
        
        $categorie = new Categorie();
        $categorie->nomCategorie = $request->get('nomCategorie'); 
        $categorie->save();
        return back();
        // autre methode
        // $categorie = new Categorie(
        //     $request->get('nomCategorie')
        // );
        // $categorie->save();
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
