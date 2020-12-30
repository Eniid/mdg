@extends('layout')


@section('content')

<h1>Le {{$lastEdition->edition_number}} marché des <span>&nbsp;Gourmets</span></h1>
<!-- Nav timeline & CTA -->
<x-nav></x-nav>
<x-timeline></x-timeline>
<x-buy_cta></x-buy_cta>

<!-- Main Content -->

<section class="main_sec desc">
        <div class="exp">
            <h2>{{$about->mdg_title}}</h2>
            <div class="this_edition_pres">
                {!!$about->mdg_desc!!}
            </div>
            <a href="#" class="cta">Editions précédents<img src="" alt=""></a>
        </div>
        <div class="pres_img desc_img about_img">
            <img src="{{ asset('img/mdg.jpg') }}" alt="">
        </div>
</section>

<section class="main_sec char">
        <div class="exp annim">
            <h2><span class="first_letter">P</span>our la bonne cause</h2>
            <p>Le Marché des Gourmets est un événement annuel organisé par le Rotary Club de Flémalle sur afin d’obtenir des fonds pour aider les plus démunis.</p>
            <p>Nous mettons à l’honneur des produits du terroir Wallon et Européen pour votre plus grand plaisir depuis 2000</p>
            <a href="#" class="h_cta">Editions précédents<img src="" alt=""></a>
        </div>
        <div class="pres_img desc_img  annim about_img">
            <img src="{{ asset('img/mdg.jpg') }}" alt="" class="test">
        </div>
</section>


<section class="main_sec desc">
        <div class="exp annim">
            <h2><span class="first_letter">E</span>dition 2021</h2>
            <p>Le Marché des Gourmets est un événement annuel organisé par le Rotary Club de Flémalle sur afin d’obtenir des fonds pour aider les plus démunis.</p>
            <p>Nous mettons à l’honneur des produits du terroir Wallon et Européen pour votre plus grand plaisir depuis 2000</p>
            <a href="#" class="cta cta">Editions précédents<img src="" alt=""></a><a href="#" class="cta h_cta">Editions précédents<img src="" alt=""></a>
        </div>
        <div class="pres_img desc_img annim about_img">
            <img src="{{ asset('img/mdg.jpg') }}" alt="">
        </div>
</section>


@endsection