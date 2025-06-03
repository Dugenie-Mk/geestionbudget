@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>Modifier les informations de votre compte</h1>
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
            <form method="POST" action="/comptes/{{ $compte->id }}" class="form-groupe">
                @csrf
                @method('PUT')
                <div class="form-groupe">
                    <label for="name">nom du compte</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $compte->account_name }}" required>
                </div>

                 <div class="form-groupe">
                    <label for="name">montant de compte</label>
                    <input type="number" class="form-control" id="name" name="name" value="{{ $compte->balance }}" required>
                </div>
                <button type="submit" class="btn btn-info">Modifier</button>
                <br><br>
                <a href="/comptes" class="btn btn-danger">RETOUR</a>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection