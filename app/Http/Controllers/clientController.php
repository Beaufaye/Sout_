<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $clients = Client::orderBy('nom')->get();
        return view('client.client', compact('clients'));
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
        $client = new Client();
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
        $client = Client::find($id);
        return view('client.modclient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
        
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
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('client.index')->with('status', 'Le client a été supprimé avec succès.');
    }

    /**
     * Search clients based on query.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Rechercher parmi les clients par nom, prénom, sexe, ou téléphone
        $clients = Client::where('nom', 'LIKE', "%{$query}%")
            ->orWhere('prenom', 'LIKE', "%{$query}%")
            ->orWhere('sexe', 'LIKE', "%{$query}%")
            ->orWhere('telephone', 'LIKE', "%{$query}%")
            ->orderBy('nom')
            ->get();

        return view('client.client_liste', compact('clients'))->render();
    }

}

