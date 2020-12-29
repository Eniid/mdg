@extends('layout')


@section('content')

<h1>Le {{$lastEdition->edition_number}} marché des <span>&nbsp;Gourmets</span></h1>
<!-- Nav timeline & CTA -->
<x-nav></x-nav>
<x-timeline></x-timeline>
<x-buy_cta></x-buy_cta>

<!-- Main Content -->


    <!-- Présentation principale du site -->
    <section class="main_sec presentation">
        <div class="pres_text">
            <h2>Le {{$lastEdition->edition_number}} marché des <span class="first_letter">Gourmets</span></h2>

            <div>
            {!! $lastEdition->catch !!}
                </div>
            <a href="#" class="main_cta">Achetez vos tickets <img src="{{ asset('img/arrow.svg') }}" alt=""></a>
        </div>
        <div class="pres_img">
            <img src="{{ asset('img/products.png') }}" alt="">
        </div>
    </section>

    <!-- Les plus du marché -->
    <section class="main_sec plus ">
        <h2 class="visually-hidden ">Les plus</h2>
            <div class="one_plus annim one"">
                <img src="{{ asset('img/one.svg') }}" alt="">
                <p>Des petit plats à déguster, praparer avec les produits exposés.</p>
            </div>
            <div class="one_plus annim two " >
                <img src="{{ asset('img/two.svg') }}" alt="">
                <p>Une garderie pour vos enfants</p>
            </div>        <div class="one_plus annim three" ">
                <img src="{{ asset('img/three.svg') }}" alt="">
                <p>Un banc contacte pour retirer de l’argent a votre disponibilité</p>
            </div>        <div class="one_plus annim four">
                <img src="{{ asset('img/four.svg') }}" alt="">
                <p>Des lots à reporter tout au long du week-end.</p>
            </div>

    </section>


    <!-- Descirpition  -->
    <section class="main_sec desc">
        <div class="exp annim">
            <h2><span class="first_letter desc_title">Edition 2021</h2>

            <p>{{$lastEdition->presentation}}</p>

            <a href="#" class="cta">Achetez vos tickets <img src="" alt=""></a>
            <a href="#" class="h_cta">Achetez vos tickets <img src="" alt=""></a>
        </div>
        <div class="pres_img desc_img annim">
            <img src="{{ asset('img/wine.png') }}" alt="">
        </div>
    </section>







@endsection