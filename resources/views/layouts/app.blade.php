<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Autoškola Vrána')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700;800&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <div class="header-inner">
        <a href="#home" class="logo">AUTOŠKO<span class="l-box">L</span>A VRÁNA</a>
        <nav class="main-nav">
            <a href="#home">Home</a>
            <a href="#o-nas">O nás</a>
            <a href="#sluzby">Naše služby</a>
            <a href="#cenik">Ceník</a>
            <a href="#kontakt">Kontakty</a>
        </nav>
        <div class="header-cta">
            <a href="#prihlaska" class="btn btn-red">Přihláška</a>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="wrap">
        <div class="footer-grid">
            <div>
                <div class="logo">AUTOŠKO<span class="l-box">L</span>A VRÁNA</div>
                <p>Autoškola skupiny B. Osobní přístup, moderní vozy, klidná ruka za volantem.</p>
            </div>
            <div>
                <h4>Navigace</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#o-nas">O nás</a></li>
                    <li><a href="#sluzby">Naše služby</a></li>
                    <li><a href="#cenik">Ceník</a></li>
                    <li><a href="#kontakt">Kontakty</a></li>
                </ul>
            </div>
            <div>
                <h4>Kontakt</h4>
                <p>+420 737 330 001</p>
                <p>E-mail bude doplněn</p>
                <p>Holešov a okolí</p>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© 2026 Autoškola Vrána. Všechna práva vyhrazena.</span>
            <span>IČO: bude doplněno</span>
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
