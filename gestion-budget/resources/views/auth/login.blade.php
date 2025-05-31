@extends('layouts.app')

@section('content')
<div id="form">                     
    <div class="connexion">
    <img src="{{ asset('images/logo4.png') }}" alt="Illustration budget">
    <form method="post">
            <fieldset>
                <legend>connexion</legend>
            <label for="email">email</label>
             <input type="email" id="email" placeholder="Entrez votre email" required>
             <br>
             <label for="password">password</label>
             <input type="password" id="password" placeholder="Entrez votre mot de passe" required>
             <br>
             <button type="submit"> connexion </button>
            

             <small><a href="/password">Mot de passe oublie</a></small>
             <br>
             <br>
             <small>Pas encore inscrit ?<a href="/register"> Creer un compte</a></small>
            </fieldset>
        </form>

    </div>  
</div>
@endsection
