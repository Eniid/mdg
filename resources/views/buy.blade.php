@extends('layout')


@section('content')

<a href="/">
    <h1>Le marché des <span>&nbsp;Gourmets</span></h1>
</a>
<!-- Nav timeline & CTA -->
<x-nav></x-nav>
<x-timeline></x-timeline>
<x-buy_cta></x-buy_cta>

<!-- Main Content -->


<section class="main_sec main_contact">
    <div class="cont_infos buy_infos">
        <h2><span class="first_letter">I</span>nfo Pratique</h2>
        <p class="covid">
            <span class="covid_title">Info Covid :</span> Cette année, exceptionnellement l’achat de billet. À l’avance est rendu obligatoire. 
        </p>

        <div class="title"><span class="first_letter">L</span>ieu</div>
        <p>Vale Saint-Lambert</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.8248455493967!2d5.480579115727143!3d50.5932087794953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f928ef867f13%3A0x9224d8cdcbf5d4c5!2sCristal%20Discovery%20Mus%C3%A9e%20Val%20Saint%20Lambert!5e0!3m2!1sfr!2sbe!4v1608203164530!5m2!1sfr!2sbe" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>        <div class="title"><span class="first_letter">D</span>ate</div>
        <p>Marse 2021</p>
        <p class="note">Les dates précises seront précisée plus    
    tard en fonction de la situation sanitaire </p>


        <div class="title"><span class="first_letter">P</span>rix</div>
        <p>
            Enfant : Gratuit <br>
            Adult : 6€
        </p>


        <a href="#" class="h_cta">En savoir plus<img src="" alt=""></a>

    </div>

    <section class="cont_form">
        <h2><span class="first_letter">A</span>cheter des billets</h2>
        <form action="">
                <a class="h_cta">acheter</a>
        </form>

        <div class="buy_or">OU</div>

    </section>

</section>


@endsection