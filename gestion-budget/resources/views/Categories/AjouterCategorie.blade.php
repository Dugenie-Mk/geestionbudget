
@extends('layouts.app')

@section('content')
 
<div class="container text-center">
    <div class="row">
      <div class="col s12">
        <h1>Ajouter un budget</h1>
        <hr>

        
<form  method="POST" class="form-groupe">


  <div class="form-groupe">
    <label for="type categorie">Description</label>
    <input type="text" class="form-control" id="type categorie" name="type categorie">
  </div>

  
 
  <button type="submit" class="btn btn-info">AJOUTER</button>
<br>
<br>
<a href="/categories" class="btn btn-danger">RETOUR</a>
<br>
<br>


</form>
      </div>
      
      @endsection
    