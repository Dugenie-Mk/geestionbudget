<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Categorie; 
use App\Models\Compte; 

class TransactionController extends Controller
{
    /**
     * Afficher la liste des transactions.
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions', compact('transactions')); 
    }

    /**
     * Afficher le formulaire pour ajouter une nouvelle transaction.
     */
    public function create()
    {
        $categories = Categorie::all();
        $accounts = Compte::all();
        return view('transactions.AjouterTransaction', compact('categories', 'accounts'));
    }

    /**
     * Enregistrer une nouvelle transaction dans la base de données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'account_id' => 'required|integer',
            'date' => 'required|string',
            'amount'=>'required|integer|min:1',
            'type' => 'required|in:revenus,depenses,transfert',
            'category_id'=>'required|integer',
            'description'=>'required|string',
        ]);

        Transaction::create([
            'account_id' => $request->account_id,
            'date'=> $request->date,
            'amount'=> $request->amount,
            'type'=> $request->type,
            'category_id'=>$request->category_id, 
            'description'=>$request->description,
        ]);

        return redirect()->route('transactions')->with('success', 'Transaction ajoutée avec succès.');
    }

    /**
     * Afficher le formulaire pour modifier une transaction existante.
     */
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $categories = Categorie::all();
        $accounts = Compte::all();
        return view('transactions.ModifierTransaction', compact('transaction', 'categories', 'accounts'));
    }

    /**
     * Mettre à jour une transaction dans la base de données.
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        $request->validate([
            'account_id' => 'required|integer',
            'date' => 'required|string',
            'amount'=>'required|integer|min:1',
            'type' => 'required|in:revenus,depenses,transfert',
            'category_id'=>'required|integer',
            'description'=>'required|string',
        ]);

        $transaction->update([
            'account_id' => $request->account_id,
            'date'=> $request->date,
            'amount'=> $request->amount,
            'type'=> $request->type,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
        ]);

        return redirect()->route('transactions')->with('success', 'Transaction mise à jour avec succès.');
    }

    /**
     * Supprimer une transaction de la base de données.
     */
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('transactions')->with('success', 'Transaction supprimée avec succès.');
    }
}