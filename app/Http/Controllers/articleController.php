<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = article::all();
        return view('article.article', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.ajarticle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new article();
        $article->nom = $request->nom;
        $article->nombre = $request->nombre;
        $article->categorie = $request->categorie;
        $article->save();

        return redirect()->route('article.create')->with('status', 'Article a bien été ajouté.');
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
        $article = article::find($id);
        return view('article.modarticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $article = article::find($id);
        
        $article->update([
            'nom' => $request->nom,
            'nombre' => $request->nombre,
            'categorie' => $request->categorie,
        ]);
   
     
        return redirect()->route('article.index')->with('status', 'Article a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = article::find($id);
        $article->delete();
        return redirect()->route('article.index')->with('status', 'Article a été supprimé avec succès.');
    }
}
