<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = client::all();
        return view('client.client', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.ajclient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->sexe = $request->sexe;
        $client->telephone = $request->telephone;
        $client->save();

        return redirect()->route('client.create')->with('status', 'Le Client a bien été ajouté.');
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
        $client = client::find($id);
        return view('client.modclient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = client::find($id);
        
        $client->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'telephone' => $request->telephone,
        ]);
   
     
        return redirect()->route('client.index')->with('status', 'Le client a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = client::find($id);
        $client->delete();
        return redirect()->route('client.index')->with('status', 'Le client a été supprimé avec succès.');
    }
}
