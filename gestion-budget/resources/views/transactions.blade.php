@extends('layouts.app')

@section('content')
 
<div class="container text-center">
    <div class="row">
      <div class="col s12">
        <h1>Suivi des Transactions</h1>
        <hr>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        
        <a href="{{ route('transactions.create') }}" class="btn btn-primary">Ajouter une transaction</a>
        <hr>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Compte</th>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Type</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>
                        @if($transaction->account)
                            {{ $transaction->account->name }} ({{ $transaction->account->number }})
                        @else
                            Compte supprimé
                        @endif
                    </td>
                    <td>{{ $transaction->date }}</td>
                    <td>{{ number_format($transaction->amount, 2) }} €</td>
                    <td>
                        @if($transaction->type == 'income')
                            <span class="badge bg-success">Revenu</span>
                        @else
                            <span class="badge bg-danger">Dépense</span>
                        @endif
                    </td>
                    <td>
                        @if($transaction->category)
                            {{ $transaction->category->name }}
                        @else
                            Catégorie supprimée
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-info">Modifier</a>
                        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette transaction ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection