<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{

    
   public function login( Request $request){
if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' =>'1']) ) {
    if (Auth::user()){
        return redirect()->route('dashboard');
    }

    else {
        return redirect()->route('index')->with('status', 'email ou mot de passe incorrect');
    }
}
return redirect()->route('index')->with('status', 'Veillez renseigner les champs ci-dessous!');
   }

   

   public function logout (){
    
    Auth::logout();
    return redirect()->route('index');
   }



   public function store(Request $request){
    User::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'telephone' => $request->telephone,
        'genre' => $request->genre,
        'cnib' => $request->cnib,
        'date_naiss' => $request->date_naiss,
        'roles_id' => $request->input('roles-id'),  
        'active' => $request->active,
        'photo' => $request->photo->store('user_profile', 'public'),
    ]);
    return redirect()->route('register')->with('status', 'Votre compte est en cours de traitement, veuillez rester à l\'écoute!');
}

}
