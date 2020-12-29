@extends('layout')


@section('content')

<h1>Le marché des <span>&nbsp;Gourmets</span></h1>
<!-- Nav timeline & CTA -->
<x-nav></x-nav>
<x-timeline></x-timeline>
<x-buy_cta></x-buy_cta>

<!-- Main Content -->

<section>
    <div class="exp_main_sec exp_head_contener">
        <div class="exp_head">
            <div class="title">
                <h2 class="title_exp"> <span class="first_letter">N</span>os exposants</h2> <a class="become_exp" href="/devenir_exposant">Devenir exposant</a>
                <div class="labeles">
                    <a href="" class="lable food">nourriture</a>
                    <a href="" class="lable wine">vin et boisson</a>
                    <a href="" class="lable bio">bio</a>
                    <a href="" class="lable loc">locale</a>
                </div>
            </div>

            <div class="expo_search">
                <form action="" class="input_contener">
                    <label for="search" class="visually-hidden">Recherche</label>
                    <input type="text" placeholder="recherche">
                    <div class="input"></div>
                    <button class="search_button"><img src="./img/search.svg" alt=""></button>
                </form>

            </div>
        </div>


    </div>

    <div class="exp_body exp_main_sec">
        <section class="exp_contener">
            <div class="exp_img" style="background-image: url('./img/bisc.jpg');">
            </div>
            <div class="exptext">
                <div class="labeles inner_lable">
                    <a href="" class="lable food">nourriture</a>
                    <a href="" class="lable loc">locale</a>
                </div>
                <h3><span class="first_letter">B</span>iscuit Belge</h3>
                <p>Concepteur de délicieux biscuit artisanaux, réalisé à 100% avec des produit bio de qualité. </p>
                <a href="#" class="h_cta exp_cta">Page Facebook</a>
            </div>
        </section>


        <section class="exp_contener">
            <div class="exp_img" style="background-image: url('./img/bisc.jpg');">
            </div>
            <div class="exptext">
                <div class="labeles inner_lable">
                    <a href="" class="lable food">nourriture</a>
                    <a href="" class="lable loc">locale</a>
                </div>
                <h3><span class="first_letter">B</span>iscuit Belge</h3>
                <p>Concepteur de délicieux biscuit artisanaux, réalisé à 100% avec des produit bio de qualité. </p>
                <a href="#" class="h_cta exp_cta">Page Facebook</a>
            </div>
        </section>



        <section class="exp_contener">
            <div class="exp_img" style="background-image: url('./img/bisc.jpg');">
            </div>
            <div class="exptext">
                <div class="labeles inner_lable">
                    <a href="" class="lable food">nourriture</a>
                    <a href="" class="lable loc">locale</a>
                </div>
                <h3><span class="first_letter">B</span>iscuit Belge</h3>
                <p>Concepteur de délicieux biscuit artisanaux, réalisé à 100% avec des produit bio de qualité. </p>
                <a href="#" class="h_cta exp_cta">Page Facebook</a>
            </div>
        </section>



        <section class="exp_contener">
            <div class="exp_img" style="background-image: url('./img/bisc.jpg');">
            </div>
            <div class="exptext">
                <div class="labeles inner_lable">
                    <a href="" class="lable food">nourriture</a>
                    <a href="" class="lable loc">locale</a>
                </div>
                <h3><span class="first_letter">B</span>iscuit Belge</h3>
                <p>Concepteur de délicieux biscuit artisanaux, réalisé à 100% avec des produit bio de qualité. </p>
                <a href="#" class="h_cta exp_cta">Page Facebook</a>

            </div>
        </section>



        <section class="exp_contener">
            <div class="exp_img" style="background-image: url('./img/bisc.jpg');">
            </div>
            <div class="exptext">
                <div class="labeles inner_lable">
                    <a href="" class="lable food">nourriture</a>
                    <a href="" class="lable loc">locale</a>
                </div>
                <h3><span class="first_letter">B</span>iscuit Belge</h3>
                <p>Concepteur de délicieux biscuit artisanaux, réalisé à 100% avec des produit bio de qualité. </p>
                <a href="#" class="h_cta exp_cta">Page Facebook</a>
            
            </div>
        </section>
    </div>
</section>


@endsection