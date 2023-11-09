<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salle;

class salleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('pages.salle.liste', [
        'listes' => Salle::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.salle.forme');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Salle::create($request->all());
        return redirect()->route('gestion_salle.index');
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
       return view('pages.salle.edit', [
        'find' => Salle::find($id)
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salle = Salle::find($id);
        $salle->update($request->all());
        return redirect()->route('gestion_salle.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salle = Salle::find($id);
        $salle->delete();
        return redirect()->route('gestion_salle.index');
    }
}
