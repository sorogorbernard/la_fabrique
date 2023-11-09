<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\User;
use App\Models\Salle;
use App\Models\Soutenance;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    public function formulaire()
    {
        return view('formulaire');
    }

    public function liste()
    {
        return view('liste');
    }

    public function dash()
    {
        $demandes = Demande::all();
        $utilisateurs = User::all();
        $salles = Salle::all();
        $soutenances = Soutenance::all();
        return view('welcome', compact('demandes', 'utilisateurs', 'salles', 'soutenances'));
    }

    public function register()
    {
        return view('auth.register');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
