<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    /**
     * Afficher la liste des catégories.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categories', compact('categories'));
    }

    /**
     * Afficher le formulaire pour ajouter une nouvelle catégorie.
     */
    public function create()
    {
        return view('categories.AjouterCategorie');
    }

    /**
     * Enregistrer une nouvelle catégorie dans la base de données.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categorie::create([
            'users_id' => auth()->id(),
            'name' => $request->name,
        ]);

        return redirect()->route('categories')->with('success', 'Catégorie ajoutée avec succès.');
    }

    /**
     * Afficher le formulaire pour modifier une catégorie existante.
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('categories.ModifierCategorie', compact('categorie'));
    }

    /**
     * Mettre à jour une catégorie dans la base de données.
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categorie->update([
            'users_id' => auth()->id(),
            'name' => $request->name,
        ]);

        return redirect()->route('categories')->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Supprimer une catégorie de la base de données.
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return redirect()->route('categories')->with('success', 'Catégorie supprimée avec succès.');
    }
}
