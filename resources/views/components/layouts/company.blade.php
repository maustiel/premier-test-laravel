@props(['title' => 'Octet'])

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('company') }}">L'entreprise</a></li>
                <li><a href="{{ route('products.index') }}">Produits</a></li>
            </ul>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Octet. Tous droits réservés.</p>
    </footer>
</body>
</html>