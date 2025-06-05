@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>Modifier un budget</h1>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/budgets/{{ $budget->id }}" class="form-groupe">
                @csrf
                @method('PUT')
                <div class="form-groupe">
                    <label for="Montant">Montant</label>
                    <input type="number" class="form-control" id="number" name="number" value="{{ $budget->budgeted_amount }}" required>
                </div>
                <br>
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
                <br>
                <button type="submit" class="btn btn-info">Modifier</button>
                <br><br>
                <a href="/budgets" class="btn btn-danger">RETOUR</a>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection