<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Easy Budget</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forgetpassword.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ajouterbudget.css') }}">

</head>
<body>

    @include('partials.header')

    <main>
      @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
