
@extends('layouts.app')

@section('content')
<div id="form">
<div class="connexion">
<img src="{{ asset('images/logo4.png') }}" alt="Illustration budget">
 <form method="post">
            <fieldset>
                <legend>inscription</legend>
                <label for="nom">Nom</label>
                 <input type="text" id="nom" placeholder="Entrez votre Nom">
                 <br>
                <label for="email">email</label>
                 <input type="email" id="email" placeholder="Entrez votre email">
                 <br>
                 <label for="password">password</label>
                 <input type="password" id="password" placeholder="Entrez votre mot de passe">
                 <br>
                 <label for="password">password</label>
                 <input type="password" id="password" placeholder="confirmation">
                 <br>
                 <button type="submit"> <a href="acceuil.html">Creer un compte</a></button>
                 <br>
            </fieldset>
        </form>
        </div>
</div>
@endsection
   