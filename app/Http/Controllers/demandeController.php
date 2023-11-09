<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;


class demandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        if (Auth::user()->roles_id == 1){
            return view('pages.demande.liste', [
                'listes' =>Demande::all()
            ] );
        }


            if (Auth::user()->roles_id == 2){
                return view('pages.demande.liste', [
                    'listes' =>Demande::where('users_id', '=', Auth::user()->id)->get()
                ] );
            }

            if (Auth::user()->roles_id == 3){
                return view('pages.demande.liste', [
                    'listes' =>Demande::all()
                ] );
            }


            if (Auth::user()->roles_id == 4){
                return view('pages.demande.liste', [
                    'listes' =>Demande::all()
                ] );
            }
     
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.demande.forme');
    }

    /**
     * Store a newly created resource in storage.
     */
    
        public function store(Request $request){
            Demande::create([
                'users_id' => $request->users_id,
                'statut' => $request->statut,
                'theme' => $request->theme,
                'session' => $request->session,
                'document' => $request->document->store('doc-demande', 'public'),
                'date_demande' => $request->date_demande,
                  
            ]);
            return redirect()->route('form_demande')->with('status', 'Votre demande a été envoyée avec succès, veuillez attendre la validation!');
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

    // pour gerer les demandes
    public function accept() {
        $listes = Demande::where('statut', '=', 'acceptée')->get();
        return view ('pages.demande.demande_approuver', compact('listes'));
    }

    public function refuse() {
        $listes = Demande::where('statut', '=', 'refusée')->get();
        return view ('pages.demande.demande_refuser', compact('listes'));
    }

    public function en_cours() {
        $listes = Demande::where('statut', '=', 'en cours')->get();
        return view ('pages.demande.demande_encours', compact('listes'));
    }

    public function inpute() {
        $listes = Demande::where('statut', '=', 'inputée')->get();
        return view ('pages.demande.demande_inputer', compact('listes'));
    }



    // fonction qui va valider les modifications 

    public function accept_demande(Request $request, $id)
    {
        $accept = Demande::find($id);
        $accept->update($request->only(['statut']));

        return redirect()->route('demande_accepter');
    }



    public function input_demande(Request $request, $id)
    {
        $input = Demande::find($id);
        $input->update($request->only(['statut']));

        return redirect()->route('demande_inpute');
    }




    public function refuse_demande(Request $request, $id)
    {
        $refuse = Demande::find($id);
        $refuse->update($request->only(['statut']));

        return redirect()->route('demande_refusee');
    }
}
