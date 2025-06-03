@extends('layouts.app')

@section('content')
<div id="form">
    <div class="connexion">
        <img src="{{ asset('images/logo4.png') }}" alt="Illustration budget">
        <form method="POST" action="{{ route('register') }}">
            @csrf <!-- Ajout du token CSRF -->

                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="Entrez votre Nom" value="{{ old('name') }}">
                @error('name') <span class="error">{{ $message }}</span> @enderror
                <br>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" value="{{ old('email') }}">
                @error('email') <span class="error">{{ $message }}</span> @enderror
                <br>
                
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe">
                @error('password') <span class="error">{{ $message }}</span> @enderror
                <br>
                
                <label for="password_confirmation">Confirmation</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmez le mot de passe">
                <br>
                
                <button type="submit">Créer un compte</button>
                <br>
        </form>
    </div>
</div>
@endsection