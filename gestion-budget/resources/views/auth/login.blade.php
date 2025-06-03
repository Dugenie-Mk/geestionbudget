@extends('layouts.app')

@section('content')
<div id="form">                     
    <div class="connexion">
        <img src="{{ asset('images/logo4.png') }}" alt="Illustration budget">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        
                <!-- Champ Email -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" 
                       placeholder="Entrez votre email" 
                       value="{{ old('email') }}" 
                       required autofocus>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
                <br>
                
                <!-- Champ Mot de passe -->
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" 
                       placeholder="Entrez votre mot de passe" 
                       required>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
                <br>
                
                <!-- Bouton de soumission -->
                <button type="submit">Connexion</button>
                
                <!-- Liens utiles -->
                <small><a href="/password">Mot de passe oublié</a></small>
                <br><br>
                <small>Pas encore inscrit ? <a href="{{ route('register') }}">Créer un compte</a></small>
        </form>
    </div>  
</div>

<style>
    .error-message {
        color: red;
        font-size: 0.8em;
    }
    .remember-me {
        margin: 10px 0;
    }
</style>
@endsection