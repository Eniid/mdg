@extends('layout')


<!-- Title -->
@section('title')
    Marchés précédents :
@endsection


@section('content')

<!-- Main Content -->

    <input type="checkbox" id="lightbox">   
    <div class="lightbox">
        <label for="lightbox" class="lightbox_button">
            FERMER
        </label>
        <div class="lightboxContainer"></div>
    </div>
<div class="about_cont"></div>


<section class="last_sec">

    <h2><span class="first_letter">M</span>archés précédents</h2>

    <section>
        <div class="last_title_contener">
            <div class="title_left"></div>
            <h3>{{$lastEdition->edition_number}} Marché des gourmets</h3>
            <div class="title_right"></div>
        </div>

        <div class="this_edition">
            <a href="#" class="h_cta">Achetez vos billets<img src="" alt=""></a>
        </div>

    </section>


    @foreach($larchives as $archive)
        
        <section>
            <div class="last_title_contener">
                <div class="title_left"></div>
                <h3>{{$archive->edition_id}}eme Marché des gourmets</h3>
                <div class="title_right"></div>
            </div>

            <div class="last_content">
                <div class="content_note this_edition_pres">
                {{$archive->presentation}}
                </div>
                <div class="content_pics">

                @foreach($archive->archivepic as $ap)
                <a href="/storage/{{$ap->img}}">
                    <img src="/storage/{{$ap->img}}" alt"" class="lightbox_image" >
                </a>
                @endforeach


                </div>
            </div>

        </section>
    @endforeach
 


    <!-- TESTE  -->
    

    <!-- end -->

</section>


@endsection