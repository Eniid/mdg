@extends('layout')


@section('content')

<h1>Le marché des <span>&nbsp;Gourmets</span></h1>
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
        <form action="">
            <div class="input_contener form_input">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name">
                <div class="input"></div>
            </div>
            <div class="input_contener form_input mail_input">
                <label for="name">E-mail :</label>
                <input type="text" id="name" name="name" class="mail">
                <div class="input"></div>
            </div>
            <div class="input_contener form_input inl_input">
                <label for="name">E-mail :</label>
                <input type="text" id="name" name="name" class="mail">
                <div class="input"></div>
            </div>
            <div class="input_contener form_input inl_input">
                <label for="name">E-mail :</label>
                <input type="text" id="name" name="name" class="mail">
                <div class="input"></div>
            </div>
            <div class="input_contener form_input inl_input">
                <label for="name">E-mail :</label>
                <input type="text" id="name" name="name" class="mail">
                <div class="input"></div>
            </div>
            <div class="input_contener form_input form_aria from_aria_exp">
                <label for="name" class="aria_lable">Votre message :</label>
                <textarea name="name" id="name" cols="30" rows="10" class="aria input_aria"></textarea>
                <div class="input input_aria"></div>
                <button class="h_cta form_send">Envoyer</button>
            </div>
        </form>
    </div>

</section>


@endsection