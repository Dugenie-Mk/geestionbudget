@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>Ajouter un compte</h1>
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
            <form method="POST" action="/comptes" class="form-groupe">
                @csrf
                <div class="form-groupe">
                    <label for="account_name">nom du compte</label>
                    <input type="text" class="form-control" id="account_name" name="account_name" required>
                </div>
                <div class="form-groupe">
                    <label for="balance">montant de compte</label>
                    <input type="text" class="form-control" id="balance" name="balance" required>
                </div>
                <button type="submit" class="btn btn-info">AJOUTER</button>
                <br><br>
                <a href="/comptes" class="btn btn-danger">RETOUR</a>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection