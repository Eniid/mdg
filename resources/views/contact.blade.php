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
        <h2><span class="first_letter">N</span>ous contacter</h2>
        <p>
            Vous avez besoin d’un renseignement ? N’hésitez pas à nous contacter, nous essayerons de vous répondre dans les meilleurs délais.
        </p>
        <p>
            Tel : 0032(0)475/311 105<br>
            E-mail : info@marchedesgourmets.be
        </p>
        <a href="#" class="h_cta">Qui sommes nous ? <img src="" alt=""></a>

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
            <div class="input_contener form_input form_aria">
                <label for="name" class="aria_lable">Votre message :</label>
                <textarea name="name" id="name" cols="30" rows="10" class="aria input_aria"></textarea>
                <div class="input input_aria"></div>
                <button class="h_cta form_send">Envoyer</button>
            </div>
        </form>
    </div>

</section>


@endsection