<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Titre de la page  -->
    <title>Marché des gourmets</title>
</head>
<body>

        <!-- Ici le contenu des pages !  -->
        @yield('content')

        <footer>
            <div>
                @if($lastEdition->aprox_date)
                    Date : {{$lastEdition->aprox_date}}
                @endif
                <br>
                @if($lastEdition->place)
                    Lieu : @if($lastEdition->google_map)<a href="{{$lastEdition->google_map}}" target="_blank" rel="noopener noreferrer">@endif{{$lastEdition->place}}@if($lastEdition->google_map)</a>@endif
                @endif

            </div>
            <div class="foot_link">
                <a href="#">{{$contact->web}}</a>
            </div>
            <div>
                Tel : {{$contact->tel}}<br>
                Mail : <a href="#">{{$contact->e_mail}}</a>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>