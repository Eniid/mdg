@extends('layout')


@section('content')

<!--MENU DE NAVIGATION -->
<div class="nav">
    <input type="checkbox" id="nav" class="nav_input visually-hidden">
    <div class="nav_control">
        <label for="nav" class="nav_lab"><span class="open_nav">Menu</span><span class="close_nav">Fermer</span></label>
    </div>

    <nav class="main_nav">
        <h2 class="visually-hidden">menu de navigation</h2>      
        <ol class="">
            <li class="main_nav_item active">
                <a href="{{ asset('/') }}"><span class="first_letter">A</span>ccueil</a>
            </li>
            <li class="main_nav_item">
                <a href="{{ asset('/exposants') }}"><span class="first_letter">E</span>xposants</a>
            </li>
            <li class="main_nav_item" >
                <a href="{{ asset('/about') }}"><span class="first_letter">Q</span>ui sommes-nous ?</a>
            </li>
            <li class="main_nav_item">
                <a href="{{ asset('/editions_precedents')}}"><span class="first_letter">M</span>arché précédent</a>
            </li>
            <li class="main_nav_item">
                <a href="{{ asset('/contact')}}"><span class="first_letter">C</span>ontact</a>
            </li>
            <li class="h_cta">
                <a href="{{ asset('/buy')}}">Acheter vos billets</a>
            </li>


        </ol>
    </nav>
    <div class="nav-bg">
    </div>

</div>


<!-- Buy main CTA -->
<x-buy_cta></x-buy_cta>



<!-- CONTENU DE LA PAGE -->
    <!-- Présentation principale du site -->
    <section class="main_sec presentation">
        <div class="pres_text">
            <h2>Le {{$lastEdition->edition_number}} marché des <span class="first_letter">Gourmets</span></h2>

            <div class="this_edition_pres">
                {!! $lastEdition->catch !!}
            </div>
            <a href="{{ asset('/buy') }}" class="main_cta">Achetez vos tickets <img src="{{ asset('img/arrow.svg') }}" alt=""></a>
        </div>
        <div class="pres_img">
            <img src="{{ asset('img/products.png') }}" alt="">
        </div>
    </section>

    <!-- Les plus du marché -->
    <section class="main_sec plus ">
        <h2 class="visually-hidden ">Les plus</h2>
            <div class="one_plus annim one">
                <div class="one_contener cont">
                    <p class="plus_text">Des petits plats à déguster, préparer avec les produits exposés.</p>
                </div>
            </div>
            <div class="one_plus annim two " >
                <div class="two_contner cont">
                    <p>Une garderie pour vos enfants</p>
                </div>
            </div>        <div class="one_plus annim three">
            <div class="three_contner cont">
                <p>Un banccontact pour retirer de l’argent à votre disponibilité</p>
            </div>
            </div>        <div class="one_plus annim four">
                <div class="four_contner cont">
                    <p>Des lots à reporter tout au long du week-end.</p>
                </div>
            </div>

    </section>

    <!-- Descirpition  -->
    <section class="main_sec desc">
        <div class="exp annim">
            <h2>Edition 2021</h2>

            <div class="this_edition_pres">
                {!!$lastEdition->presentation!!}
            </div>

            <a href="{{ asset('/about') }}" class="cta">En savoir plus sur nous</a>
            <a href="{{ asset('/buy') }}" class="h_cta">Achetez vos tickets</a>
        </div>
        <div class="pres_img desc_img annim">
            <img src="{{ asset('img/wine.png') }}" alt="">
        </div>
    </section>







@endsection