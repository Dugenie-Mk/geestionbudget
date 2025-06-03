@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>Modifier une transaction</h1>
            <hr>

            <form method="POST" action="{{ route('transactions.update', $transaction->id) }}" class="form-groupe">
                @csrf
                @method('PUT')

                <div class="form-groupe">
                    <label for="account_id">Compte</label>
                    <select class="form-control" id="account_id" name="account_id" required>
                        @foreach($accounts as $account)
                            <option value="{{ $account->id }}" {{ $transaction->account_id == $account->id ? 'selected' : '' }}>
                                {{ $account->name }} ({{ $account->number }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-groupe">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $transaction->date }}" required>
                </div>

                <div class="form-groupe">
                    <label for="amount">Montant</label>
                    <input type="number" class="form-control" id="amount" name="amount" value="{{ $transaction->amount }}" required min="1">
                </div>

                <div class="form-groupe">
                    <label for="type">Type</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="revenus" {{ $transaction->type == 'revenus' ? 'selected' : '' }}>Revenu</option>
                        <option value="depenses" {{ $transaction->type == 'depenses' ? 'selected' : '' }}>Dépense</option>
                        <option value="transfert" {{ $transaction->type == 'transfert' ? 'selected' : '' }}>Transfert</option>
                    </select>
                </div>

                <div class="form-groupe">
                    <label for="category_id">Catégorie</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $transaction->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-groupe">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" required>{{ $transaction->description }}</textarea>
                </div>

                <br>
                <button type="submit" class="btn btn-info">MODIFIER</button>
                <br><br>
                <a href="/transactions" class="btn btn-danger">RETOUR</a>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection