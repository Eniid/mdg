@extends('layout')
<!-- Title -->
@section('title')
    Qui sommes-nous ? :
@endsection


@section('content')


<!-- Main Content -->
<div class="about_cont"></div>
<section class="about_main ">
<h2><span class="first_letter">Q</span>ui sommes-nous ?</h2>
    <section class="main_sec desc">
            <div class="exp">
                <h3>{{$about->mdg_title}}</h3>
                <div class="this_edition_pres">
                {!!$about->mdg_desc!!}
                </div>

                <a href="{{ asset('/editions_precedents') }}" class="cta">Editions précédents<img src="" alt=""></a>
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
    </section>

    <div class="sponsor_sec">
        <div class="sponsor_cont">
            @foreach($sponsors as $sponsor)
                @if($sponsor->lien)<a href="{{$sponsor->lien}}" target="_blank" rel="noopener noreferrer" >@endif
                    <img src="/storage/{{$sponsor->img}}" alt="{{$sponsor->nom}}">
                @if($sponsor->lien)</a>@endif
            @endforeach
        </div>
    </div>

</section>

@endsection