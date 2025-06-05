@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>Modifier une catégorie</h1>
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
            <form method="POST" action="/categories/{{ $categorie->id }}" class="form-groupe">
                @csrf
                @method('PUT')
                <div class="form-groupe">
                    <label for="name">Description</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $categorie->name }}" required>
                </div>
                <br>
                <button type="submit" class="btn btn-info">Modifier</button>
                <br><br>
                <a href="/categories" class="btn btn-danger">RETOUR</a>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection