<div class="nav">
    <input type="checkbox" id="nav" class="nav_input visually-hidden">
    <div class="nav_control">
        <label for="nav" class="nav_lab"><span class="open_nav">Menu</span><span class="close_nav">Fermer</span></label>
    </div>

    <nav class="main_nav">
        <h2 class="visually-hidden">menu de navigation</h2>


        
        <ol class="">
            <li class="main_nav_item {{ (request()->is('/')) ? 'active' : '' }}">
                <a href="/"><span class="first_letter">A</span>cceuil</a>
            </li>
            <li class="main_nav_item {{ (request()->is('/exposants')) ? 'active' : '' }}">
                <a href="/exposants"><span class="first_letter">E</span>xposants</a>
            </li>
            <li class="main_nav_item">
                <a href="/about"><span class="first_letter">Q</span>ui sommes nous ?</a>
            </li>
            <li class="main_nav_item">
                <a href="/editions_precedents"><span class="first_letter">M</span>arché présédent</a>
            </li>
            <li class="main_nav_item">
                <a href="/contact"><span class="first_letter">C</span>ontact</a>
            </li>
            <li class="h_cta">
                <a href="/buy">Acheter vos billets</a>
            </li>
        </ol>
    </nav>
</div>
