<header class="main-header">
    <div class="container">
        <h1 class="logo">Easy Budget</h1>
        <nav>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('categories') }}">Categories</a>
            <a href="{{ route('transactions') }}">Transactions</a>
            <a href="{{ route('budgets') }}">Mes budgets</a>
            @auth
                <form action="{{ route('logout') }}" method="POST" class="logout-form">
                    @csrf
                    <button type="submit" class="logout-btn" style="font-size:15px;">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}">Connexion</a>
            @endauth
            <a href="{{ route('comptes') }}" >Compte</a>
        </nav>
    </div>
</header>