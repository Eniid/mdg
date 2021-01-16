@extends('layout')

<!-- Title -->
@section('title')
    Exposants :
@endsection

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
            <li class="main_nav_item">
                <a href="{{ asset('/') }}"><span class="first_letter">A</span>ccueil</a>
            </li>
            <li class="main_nav_item active">
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


<!-- PIC -->
<div class="about_cont"></div>


<!-- CONTENU DE LA PAGE -->
<section>

    <!-- Titre, lable et search bar -->
    <div class="exp_main_sec exp_head_contener">
        <div class="exp_head">
            <div class="title">
                <h2 class="title_exp"> <span class="first_letter">N</span>os exposants</h2> <a class="become_exp" href="{{ asset('/exposants/demande') }}">Devenir exposant</a>
                
                <!-- Lables -->
                <div class="labeles">
                    @foreach($lables as $lable)
                        <a href="/exposants/?s={{$lable->name}}" class="lable" style="color:{{$lable->color}}">{{$lable->name}}</a>
                    @endforeach
                    <a href="{{ asset('/exposants') }}" class="lable">Voir tout</a>
                </div>
            </div>

            <!-- Search barre-->
            <div class="expo_search">
                <form action="exposants" class="input_contener">
                    @csrf
                    <label for="search" class="visually-hidden">Recherche</label>
                    <input type="text" id="search" class="search_input" placeholder="recherche" name="search">
                    <div class="input"></div>
                    <button class="search_button"><img src="{{ asset('./img/search.svg') }}" alt=""></button>
                </form>
            </div>

        </div>
    </div>


    <!-- Liste des exposants -->
    <div class="exp_body exp_main_sec">
        @foreach($exposants as $exposant)
            <section class="exp_contener">
                @if($exposant->img)
                    <div class="exp_img" style="background-image: url('./storage/{{$exposant->img}}');">
                    </div>
                @endif

                <div class="exptext">
                    <div class="labeles inner_lable">
                        @foreach($exposant->lables as $lable)
                        <a href="/exposants/?s={{$lable->name}}" class="lable" style="color:{{$lable->color}}">{{$lable->name}}</a>
                        @endforeach
                    </div>
                    <h3>{{$exposant->name}}</h3>
                    <div class="exp_desc">{!!$exposant->desciption!!}</div>
                    @if($exposant->link)
                        <a href="{{$exposant->link}}" class="h_cta exp_cta" target="_blank" rel="noopener noreferrer">Leur site web</a>
                    @endif
                </div>
            </section>
        @endforeach
        <br>

        

    </div>

    <!-- Pagination -->
    <div class="paginate">
        {{ $exposants->links() }}
    </div>
</section>


@endsection