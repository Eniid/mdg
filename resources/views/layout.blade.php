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
                Date : Marse 2020<br>
                Lieu : <a href="#">Vale Saint-Lambert</a>
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