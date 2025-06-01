@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mes Budgets</h1>
    <p>Consultez et gérez vos différents budgets ici.</p>

    

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ma table de budget</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
        
<div class="container text-center">
    <div class="row">
      <div class="col s12">
        <hr>
    <a href="/form-ajouter-budget" class="btn btn-primary">Ajouter un budget</a>
        <hr>
        <table  class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Date</th>
                    <th>Type Categories</th>
                    <th>Montant</th>
                    <th>Actions</th>
                </tr>
               </thead>
               <tbody>
                <tr>
                <td>1</td>
                <td>2023</td>
                <td>loisirs</td>
                <td>100000</td>
                <td>
                    <a href="/form-modifier-budget" class="btn btn-info">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
                </tr>
               </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>




</div>
@endsection
        