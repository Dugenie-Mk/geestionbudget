@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Suivi des comptes</h1>
    <p>Ajoutez, modifiez et suivez tout vos comptes.</p>
</div>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ma table de comptes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <hr>
            <a href="/form-ajouter-compte" class="btn btn-primary">Ajouter une compte</a>
            <hr>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Utilisateur</th>
                        <th>Nom du compte</th>
                        <th>Montant du compte</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comptes as $compte)
                        <tr>
                            <td>{{ $compte->id }}</td>
                            <td>{{ $compte->user->name }}</td>
                            <td>{{ $compte->account_name }}</td>
                            <td>{{ $compte->balance }}</td>
                            <td>
                                <a href="/form-modifier-compte/{{ $compte->id }}" class="btn btn-info">Update</a>
                                <form action="/comptes/{{ $compte->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </div>
</div>
@endsection