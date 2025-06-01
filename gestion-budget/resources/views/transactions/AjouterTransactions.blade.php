@extends('layouts.app')

@section('content')
 
<div class="container text-center">
    <div class="row">
      <div class="col s12">
        <h1>Ajouter une transaction</h1>
        <hr>

        
<form  method="POST" class="form-groupe">

  <div class="form-groupe">
    <label for="numero de compte">Numero de compte</label>
    <input type="number" class="form-control" id="numero de compte" name="numero de compte" required>
  </div>

  <div class="form-groupe">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>

  <div class="form-groupe">
    <label for="montant">Montant</label>
    <input type="number" class="form-control" id="montant" name="montant" required>
  </div>
  <br>
 
  <button type="submit" class="btn btn-info">AJOUTER</button>
<br>
<br>
<a href="/transactions" class="btn btn-danger">RETOUR</a>
<br>
<br>


</form>
      </div>
      
      @endsection
    