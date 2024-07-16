<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facture;

class factureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facture = facture::all();
        return view('facture.facture', compact('facture'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('facture.ajfacture');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $facture = new facture();
        $facture->date = $request->date;
        $facture->save();

        return redirect()->route('facture.create')->with('status', 'Le Client a bien été ajouté.');
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
        $facture = facture::find($id);
        return view('facture.modfacture', compact('facture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $facture = facture::find($id);
        
        $facture->update([
            'date' => $request->date,
        ]);
   
     
        return redirect()->route('facture.index')->with('status', 'La facture a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $facture = facture::find($id);
        $facture->delete();
        return redirect()->route('facture.index')->with('status', 'La facture a été supprimé avec succès.');
    }
}
