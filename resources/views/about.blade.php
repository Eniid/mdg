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
            <img src="/storage/{!!$about->mdg_img!!}"alt="">
        </div>
</section>

<section class="main_sec char">
        <div class="exp annim">
            <h2>{{$about->why_title}}</h2>
            <div class="this_edition_pres">
            {!!$about->why_desc!!}
            </div>
            <a href="#" class="h_cta">Editions précédents<img src="" alt=""></a>
        </div>
        <div class="pres_img desc_img  annim about_img">
            <img src="/storage/{!!$about->why_img!!}" alt="" class="test">
        </div>
</section>


<section class="main_sec desc">
        <div class="exp annim">
            <h2>{{$about->rotari_title}}</h2>
            <div class="this_edition_pres">
            {!!$about->rotari_desc!!}
            </div>
            <a href="#" class="cta cta">Editions précédents<img src="" alt=""></a><a href="#" class="cta h_cta">Editions précédents<img src="" alt=""></a>
        </div>
        <div class="pres_img desc_img annim about_img">
            <img src="/storage/{!!$about->rotari_img!!}" alt="">
        </div>
</section>/


@endsection