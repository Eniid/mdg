@extends('layout')


@section('content')

<h1>Le {{$lastEdition->edition_number}} marché des <span>&nbsp;Gourmets</span></h1>

<!-- Nav timeline & CTA -->
<x-nav></x-nav>
<x-timeline></x-timeline>
<x-buy_cta></x-buy_cta>

<!-- Main Content -->


<section class="main_sec main_contact">
    <div class="cont_infos">
        <h2><span class="first_letter">D</span>evenir exposant</h2>
        <p>
        Comme chaque année, nous donnerons la priorité aux producteurs de produits authentiques et innovants, ce qui fait la réputation de notre Marché. Si vous vous reconnaissez dans cette description, contactez-nous et, dans la mesure de nos places libres, nous vous accueillerons avec plaisir. 
        </p>
        <p>
        Vous avez une question avant d’intoduire votre demande ou besoin d’informations supplémentaires ? 
        </p>
        <a href="#" class="h_cta">Nous contacter<img src="" alt=""></a>

    </div>
    <div class="cont_form">
        <div class="validation">
            <div>
                Votre requête à bien été envoyé, merci pour votre intêret, nous vous recontacterons au plus vite!  
            </div><br>
            <a href="/" class="cta">Retourner à l'acceuil<img src="" alt=""></a>
        </div>


    </div>

</section>


@endsection