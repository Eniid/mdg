@extends('layout')


@section('content')

<h1>Le {{$lastEdition->edition_number}} marché des <span>&nbsp;Gourmets</span></h1>
<!-- Nav timeline & CTA -->
<x-nav></x-nav>
<x-timeline></x-timeline>
<x-buy_cta></x-buy_cta>

<!-- Main Content -->

<section>
    <div class="exp_main_sec exp_head_contener">
        <div class="exp_head">
            <div class="title">
                <h2 class="title_exp"> <span class="first_letter">N</span>os exposants</h2> <a class="become_exp" href="/exposants/demande">Devenir exposant</a>
                <div class="labeles">
                    @foreach($lables as $lable)
                    <a href="/exposants/?s={{$lable->name}}" class="lable" style="color:{{$lable->color}}">{{$lable->name}}</a>
                    @endforeach
                    <a href="/exposants" class="lable">Voir tout</a>
                </div>
            </div>

            <div class="expo_search">
                <form action="exposants" class="input_contener">
                    @csrf
                    <label for="search" class="visually-hidden">Recherche</label>
                    <input type="text" placeholder="recherche" name="search">
                    <div class="input"></div>
                    <button class="search_button"><img src="./img/search.svg" alt=""></button>
                </form>

            </div>
        </div>


    </div>

    <div class="exp_body exp_main_sec">

        @foreach($exposants as $exposant)
            <section class="exp_contener">
                <div class="exp_img" style="background-image: url('./img/bisc.jpg');">
                </div>
                <div class="exptext">
                    <div class="labeles inner_lable">
                        @foreach($exposant->lables as $lable)
                        <a href="" class="lable" style="color:{{$lable->color}}">{{$lable->name}}</a>
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

    </div>
</section>


@endsection