<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\authController;
use App\Http\Controllers\demandeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\juryController;
use App\Http\Controllers\salleController;
use App\Http\Controllers\soutenanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [pageController::class, 'index'])->name('index');
Route::get('dashboard', [pageController::class, 'dash'])->name('dashboard');


// route de demande

Route::post('ajouter_demande', [demandeController::class, 'store'])->name('add_demande');

Route::get('formulaire_demande', [demandeController::class, 'create'])->name('form_demande');

Route::get('liste_demande', [demandeController::class, 'index'])->name('liste_demande');

// valider les modifications
Route::get('accepter', [demandeController::class, 'accept'])->name('demande_accepter');
Route::get('refusée', [demandeController::class, 'refuse'])->name('demande_refusee');
Route::get('inputer', [demandeController::class, 'inpute'])->name('demande_inpute');
Route::get('en_cours', [demandeController::class, 'en_cours'])->name('demande_encours');


Route::post('accepter_demande/{id}', [demandeController::class, 'accept_demande'])->name('accept_demande');
Route::post('demande_inpute/{id}', [demandeController::class, 'input_demande']);
Route::post('demande_refusee/{id}', [demandeController::class, 'refuse_demande']);


// route d'authentification
Route::post('authentification', [authController::class, 'login'])->name('login');
Route::get('deconnexion', [authController::class, 'logout'])->name('logout');


Route::get('liste-etudiant', [pageController::class, 'liste'])->name('liste');

Route::get('creation-utilisateur', [pageController::class, 'register'])->name('register');

Route::post('enregistrement', [authController::class, 'store'])->name('add_users');



// route utilisateur

Route::resource('gestion_utilisateur', UserController::class);

Route::get('supprimer_user/{id}', [UserController::class, 'destroy']);

Route::resource('gestion_jury', juryController::class);

Route::get('supprimer_jury/{id}', [juryController::class, 'destroy']);

Route::resource('gestion_salle', salleController::class);

Route::get('supprimer_salle/{id}', [salleController::class, 'destroy']);



// routes soutenance
Route::resource('gestion_soutenance', soutenanceController::class);

Route::get('supprimer_soutenance/{id}', [soutenanceController::class, 'destroy']);

Route::get('gestion_evaluation/{id}', [soutenanceController::class, 'form_evaluer'])->name('form_evaluation');


