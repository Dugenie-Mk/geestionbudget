@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>Ajouter une transaction</h1>
            <hr>

            <form method="POST" action="{{ route('transactions.store') }}" class="form-groupe">
                @csrf

                <div class="form-groupe">
                    <label for="account_id">Compte</label>
                    <select class="form-control" id="account_id" name="account_id" required>
                        @foreach($accounts as $account)
                            <option value="{{ $account->id }}">{{ $account->name }} ({{ $account->account_name }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-groupe">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="form-groupe">
                    <label for="amount">Montant</label>
                    <input type="number" class="form-control" id="amount" name="amount" required min="1">
                </div>
                <br>
                <div class="form-groupe">
                    <label for="type">Type</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="revenus">Revenus</option>
                        <option value="depenses">depenses</option>
                        <option value="transfert">Transfert</option>

                    </select>
                </div>

                <div class="form-groupe">
                    <label for="category_id">Catégorie</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-groupe">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>

                <br>
                <button type="submit" class="btn btn-info">AJOUTER</button>
                <br><br>
                <a href="transactions" class="btn btn-danger">RETOUR</a>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection