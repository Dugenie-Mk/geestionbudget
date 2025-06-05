@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>Ajouter une catégorie</h1>
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
            <form method="POST" action="/categories" class="form-groupe">
                @csrf
                <div class="form-groupe">
                    <label for="name">Description</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <br>
                <button type="submit" class="btn btn-info">AJOUTER</button>
                <br><br>
                <a href="/categories" class="btn btn-danger">RETOUR</a>
                <br><br>
            </form>
        </div>
    </div>
</div>
@endsection