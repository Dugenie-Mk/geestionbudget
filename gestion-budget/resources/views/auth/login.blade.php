@extends('layouts.app')

@section('content')
<div id="form">                     
    <div class="connexion">
        <img src="{{ asset('images/logo4.png') }}" alt="Illustration budget">
        
        @auth
            <div class="already-connected">
                <p>Vous êtes déjà connecté !</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Déconnexion</button>
                </form>
            </div>
        @else
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
        @endauth
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
    .already-connected {
        text-align: center;
        padding: 20px;
    }
    .already-connected p {
        margin-bottom: 15px;
    }
</style>
@endsection