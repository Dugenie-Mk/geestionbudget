<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie; 
use App\Models\Budget; 


class BudgetController extends Controller
{

    /**
     * Afficher la liste des catégories.
     */
    public function index()
    {
        $budgets = Budget::all();
        return view('budgets', compact('budgets'));
    }

    /**
     * Afficher le formulaire pour ajouter une nouvelle catégorie.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('Budgets.AjouterBudget', compact('categories'));
    }

    /**
     * Enregistrer une nouvelle catégorie dans la base de données.
     */
    public function store(Request $request)
    {
         $request->validate([
            'budgeted_amount' => 'required|integer|min:1',
        ]);

        Budget::create([
            'category_id' => $request->category_id,
            'budgeted_amount' => $request->budgeted_amount,
        ]);

        return redirect()->route('budgets')->with('success', 'budget ajoutée avec succès.');
    }

    /**
     * Afficher le formulaire pour modifier un budget existante.
     */
    public function edit($id)
    {
        $Budget = Budget::findOrFail($id);
        $categories = Categorie::all();
        return view('Budgets.ModifierBudget', compact('Budget', 'categories'));
    }

    /**
     * Mettre à jour une catégorie dans la base de données.
     */
    public function update(Request $request, $id)
    {
        $Budget = Budget::findOrFail($id);

        $validated = $request->validate([
            'budgeted_amount' => 'required|integer|min:1',
        ]);

        $Budget->update([
            'category_id' => $request->category_id,
            'budgeted_amount' => $request->budgeted_amount,
        ]);

        return redirect()->route('budgets')->with('success', 'Budget mis à jour avec succès.');
    }

    /**
     * Supprimer une catégorie de la base de données.
     */
    public function destroy($id)
    {
        $Budget = Budget::findOrFail($id);
        $Budget->delete();

        return redirect()->route('budgets')->with('success', 'Budget supprimé avec succès.');
    }
}
