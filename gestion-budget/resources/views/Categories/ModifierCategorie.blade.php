
@extends('layouts.app')

@section('content')
 
<div class="container text-center">
    <div class="row">
      <div class="col s12">
        <h1>Modifier une categorie</h1>
        <hr>

        
<form  method="POST" class="form-groupe">



  <div class="form-groupe">
    <label for="type categorie">Description</label>
    <input type="text" class="form-control" id="type categorie" name="type categorie" required>
  </div>

 
  <button type="submit" class="btn btn-info">Modifier</button>
<br>
<br>
<a href="/categories" class="btn btn-danger">RETOUR</a>


</form>
      </div>
      
      @endsection