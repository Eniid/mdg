@extends('layout')


@section('content')

<h1>Le {{$lastEdition->edition_number}} marché des <span>&nbsp;Gourmets</span></h1>
<!-- Nav timeline & CTA -->
<x-nav></x-nav>
<x-timeline></x-timeline>
<x-buy_cta></x-buy_cta>

<!-- Main Content -->


<section class="last_sec">

    <h2><span class="first_letter">M</span>archés précédents</h2>

    <section>
        <div class="last_title_contener">
            <div class="title_left"></div>
            <h3>{{$lastEdition->edition_number}} Marché des gourmets</h3>
            <div class="title_right"></div>
        </div>

        <a href="#" class="h_cta">Achetez vos billets<img src="" alt=""></a>
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
                <img src="https://www.guyom-design.com/blog/images/5.jpg" alt>
                <img src="https://www.guyom-design.com/blog/images/5.jpg" alt>
                <img src="https://www.guyom-design.com/blog/images/5.jpg" alt>
                <img src="https://www.guyom-design.com/blog/images/5.jpg" alt>
                <img src="https://www.guyom-design.com/blog/images/5.jpg" alt>
                <img src="https://www.guyom-design.com/blog/images/5.jpg" alt>
                <img src="https://www.guyom-design.com/blog/images/5.jpg" alt>

                </div>
            </div>

        </section>
    @endforeach
    {{ $archives->links() }}


    <!-- TESTE  -->
    

    <!-- end -->

</section>


@endsection