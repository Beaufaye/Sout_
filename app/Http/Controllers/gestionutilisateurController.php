<?php

namespace App\Http\Controllers;
use App\Models\gestionutilisateur;
use Illuminate\Http\Request;

class gestionutilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gestionutilisateur = gestionutilisateur::all();
        return view('gestionutilisateur.gestionutilisateur', compact('gestionutilisateur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gestionutilisateur.ajutil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gestionutilisateur = new gestionutilisateur();
        $gestionutilisateur->name = $request->name;
        $gestionutilisateur->role = $request->role;
        $gestionutilisateur->email = $request->email;
        $gestionutilisateur->password = $request->password;
        $gestionutilisateur->save();

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
