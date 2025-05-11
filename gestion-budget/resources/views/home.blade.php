@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-content">
        <h2>Maîtrisez votre budget, vivez plus librement</h2>
        <p>Easy Budget vous aide à suivre vos dépenses, revenus et atteindre vos objectifs financiers.</p>
        <a href="{{ route('register') }}" class="cta-button">Commencez gratuitement</a>
    </div>
    <div class="hero-image">
        <img src="{{ asset('images/hero.jpg') }}" alt="Illustration budget">
    </div>
</section>

<section class="features">
    <div class="feature">
        <h3>💸 Suivi des dépenses</h3>
        <p>Catégorisez et visualisez facilement vos dépenses pour mieux économiser.</p>
    </div>
    <div class="feature">
        <h3>💰 Revenus centralisés</h3>
        <p>Visualisez vos rentrées d'argent en un seul endroit et restez organisé.</p>
    </div>
    <div class="feature">
        <h3>📊 Rapports et graphiques</h3>
        <p>Analysez vos finances avec des visualisations claires et exploitables.</p>
    </div>
</section>

<section class="benefits">
    <div class="benefit">
        <h3>🔔 Rappels intelligents</h3>
        <p>Ne manquez plus jamais une échéance avec nos alertes automatiques.</p>
    </div>
    <div class="benefit">
        <h3>🔒 Données sécurisées</h3>
        <p>Vos données sont protégées par des protocoles de sécurité avancés.</p>
    </div>
</section>

<section class="testimony">
    <blockquote>
        "Grâce à Easy Budget, j’ai pu épargner pour mes vacances sans stress !"
    </blockquote>
    <cite>– Claire, utilisatrice depuis 6 mois</cite>
</section>


@endsection
