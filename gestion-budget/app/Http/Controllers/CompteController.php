<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;


class CompteController extends Controller
{
     /**
     * Afficher la liste des comptes.
     */
    public function index()
    {
        $comptes = compte::all();
        return view('comptes', compact('comptes'));
    }

    /**
     * Afficher le formulaire pour ajouter une nouvelle compte.
     */
    public function create()
    {
        return view('comptes.Ajoutercompte');
    }

    /**
     * Enregistrer une nouvelle compte dans la base de données.
     */
    public function store(Request $request)
    {
         $request->validate([
            'account_name' => 'required|string|max:255',
            'balance'=> 'required|integer|min:1',
        ]);

        compte::create([
            'users_id' => auth()->id(),
            'account_name' => $request->account_name,
            'balance'=> $request->balance,
        ]);

        return redirect()->route('comptes')->with('success', 'Compte ajoutée avec succès.');
    }

    /**
     * Afficher le formulaire pour modifier une compte existante.
     */
    public function edit($id)
    {
        $compte = compte::findOrFail($id);
        return view('comptes.Modifiercompte', compact('compte'));
    }

    /**
     * Mettre à jour un compte dans la base de données.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'account_name' => 'required|string|max:255',
            'balance'=> 'required|integer|min:1',
        ]);
        
        $compte = compte::findOrFail($id);

        $compte->update([
            'users_id' => auth()->id(),
            'account_name' => $request->account_name,
             'balance'=> $request->balance,
        ]);

        return redirect()->route('comptes')->with('success', 'Compte mise à jour avec succès.');
    }

    /**
     * Supprimer un compte de la base de données.
     */
    public function destroy($id)
    {
        $compte = compte::findOrFail($id);
        $compte->delete();

        return redirect()->route('comptes')->with('success', 'Compte supprimée avec succès.');
    }
}
