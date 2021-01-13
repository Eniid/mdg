<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS  -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Informations sur le site  -->
    <meta name="description" content="Le marché des Gourmets est évènement culinaire organisé par le Rotary Club qui à lieu une fois par an en Belgique.">
    <meta name="keywords" content="nouriture, boisson, marché, bierre, vin, fête">
    <meta name="author" content="Enid">

    <!-- Flavicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Titre de la page  -->
    <title>@yield('title') Marché des gourmets</title>
</head>
<body itemscope itemtype="https://schema.org/FoodEvent">

        <a href="{{ asset('/') }}">
            <h1 role="heading" aria-level="1">Le {{$lastEdition->edition_number}} marché des <span>&nbsp;Gourmets</span></h1>
        </a>

        <!-- Nav timeline & CTA -->
        <x-nav></x-nav>
        <x-timeline></x-timeline>
        <x-buy_cta></x-buy_cta>

        <!-- Ici le contenu des pages !  -->
        @yield('content')

        <!-- Footer  -->
        <footer>
            <div>
                @if($lastEdition->aprox_date)
                    <p> Date : <span itemprop="startDate">{{$lastEdition->aprox_date}}</span>
                @endif
                <br>
                @if($lastEdition->place)
                    Lieu : <span itemprop="location">@if($lastEdition->google_map)</span><a href="{{$lastEdition->google_map}}" target="_blank" rel="noopener noreferrer">@endif{{$lastEdition->place}}@if($lastEdition->google_map)</a>@endif </p>
                @endif

            </div>
            <div class="foot_link">
                <a href="{{$contact->web}}" target="_blank" rel="noopener noreferrer">{{$contact->web}}</a>
            </div>
            <div>
                <p>Tel : {{$contact->tel}}<br>
                Mail : <a href="#">{{$contact->e_mail}}</a></p>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>