@extends('layout')


@section('content')

<a href="/">
    <h1>Le {{$lastEdition->edition_number}} marché des <span>&nbsp;Gourmets</span></h1>
</a>
<!-- Nav timeline & CTA -->
<x-nav></x-nav>
<x-timeline></x-timeline>
<x-buy_cta></x-buy_cta>

<!-- Main Content -->


<section class="main_sec main_contact">
    <div class="cont_infos buy_infos">
        <h2><span class="first_letter">I</span>nfo Pratique</h2>
        <p class="covid">
            <span class="covid_title">Info Covid :</span> Cette année, exceptionnellement l’achat de billet. À l’avance est rendu obligatoire. 
        </p>

        <div class="title"><span class="first_letter">L</span>ieu</div>
        @if($lastEdition->place)
            <p>Lieu : @if($lastEdition->google_map)<a href="{{$lastEdition->google_map}}" target="_blank" rel="noopener noreferrer">@endif{{$lastEdition->place}}@if($lastEdition->google_map)</a>@endif</p>
            <p>{{$lastEdition->adress}}</p>
        @else
        A venir
        @endif
        <div class="title"><span class="first_letter">D</span>ate</div>

        @if($lastEdition->bigining_date	)
            <p>De {{$lastEdition->aprox_date}} au {{$lastEdition->ending_date}}	</p>
        @elseif($lastEdition->aprox_date)
            <p>{{$lastEdition->aprox_date}}</p>
            <p class="note">Des dates plus précises setont connnues à l'aproche de l'évènement.</p>
        @else
        A venir
        @endif




        <div class="title"><span class="first_letter">P</span>rix</div>
        <p>
            Enfant :  {{$lastEdition->kids_price}} <br>
            Adult : {{$lastEdition->price}}
        </p>


        <a href="#" class="h_cta">Qui sommes nous ? <img src="" alt=""></a>

    </div>

    <section class="cont_form">
        <h2><span class="first_letter">A</span>cheter des billets</h2>
        <div>
            L'achat des billet n'est pas encore dispobine pour le moment. 
        </div>

    </section>

</section>


@endsection