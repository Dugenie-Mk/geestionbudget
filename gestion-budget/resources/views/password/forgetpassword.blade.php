@extends('layouts.app')

@section('content')

<div id="form">
<div class="password">
    <img src="{{ asset('images/logo4.png') }}" alt="Illustration budget">
      <form method="post">
            <legend>pass word forget</legend>
          <label for="email">email</label>
          <br>
          <input type="email" id="email" placeholder="entrer votre email">
          </br>
        <br>
        <button type="submit">Envoyer</button>
        </br>
     </form>
    </div>
</div>
    @endsection