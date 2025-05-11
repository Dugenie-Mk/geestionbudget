@extends('layouts.app')

@section('content')
<div id="form">
    <div class="connexion">
    <img src="{{ asset('images/logo4.png') }}" alt="Illustration budget">
    <form method="post">
            <fieldset>
                <legend>connexion</legend>
            <label for="email">email</label>
             <input type="email" id="email" placeholder="Entrez votre email">
             <br>
             <label for="password">password</label>
             <input type="password" id="password" placeholder="Entrez votre mot de passe">
             <br>
             <button type="submit"> <a href="acceuil.html"> connexion</a></button>
            

             <small><a href="/password">Mot de passe oublie</a></small>
             <br>
             <br>
             <small>Pas encore inscrit ?<a href="/register"> Creer un compte</a></small>
            </fieldset>
        </form>

    </div>  
</div>
@endsection
