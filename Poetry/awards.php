<?php /* Template Name: Awards */ ?>

<?php get_header(); ?>

<div class="row">
    <div class="col picture">
        <figure class="img-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/css/premi/img/piazza.jpg" alt="treehouse">
            <div class="filter">
                <figcaption class="caption">
                    <div class="image-description">
                        <h1 class="title">Premio<br/>Piazza Dei Mestieri</h1>
                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="button-container">
                            <button id="addProject">Aggiungi Progetto</button>
                            <button id="signUp">ISCRIVITI</button>
                        </div>
                    </div>
                </figcaption>
            </div>
        </figure>
    </div>
</div>
<div class="container">
    <div class="poetry">
        <div class="row">
            <div class="col col-6">
                <div class="line-container">
                    <p class="line">___</p>
                </div>
                <div class="reward-description-container">
                    <h1>Premio<br/>Piazza Dei Mestieri</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div class="col col-6">
                <div class="poetry-navigation">
                    <button id="previousPoetry">SX</button>
                    <button id="nextPoetry">DX</button>
                    <div class="poetry-container">
                        <div class="poetry-text">
                            <h1>l'infinito</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jury-section-container">
        <div class="row">
            <div class="jury-year-selection">
                <div class="line-container">
                    <p class="line">___</p>
                </div>
                <div class="reward-description-container">
                    <h1>Giuria</h1>
                </div>
                <div class="years">
                    <p>Seleziona l'anno:</p>
                    <button class="year-button">2014</button>
                    <button class="year-button">2015</button>
                    <button class="year-button">2016</button>
                    <button class="year-button">2017</button>
                </div>
            </div>
            <div class="judges">
                <ul>
                    <li class="col col-3">
                        <div class="card">
                            <img class="photo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/premi/img/mariarossi.jpg">
                            <p class="text judge-name">Carcarlo Pravettoni</p>
                            <p class="text">Giornalista</p>
                        </div>
                    </li>
                    <li class="col col-3">
                        <div class="card">
                            <img class="photo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/premi/img/gregoryhouse.jpg">
                            <p class="text judge-name">Carcarlo Pravettoni</p>
                            <p class="text">Giornalista</p>
                        </div>
                    </li>
                    <li class="col col-3">
                        <div class="card">
                            <img class="photo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/premi/img/ozzy.jpg">
                            <p class="text judge-name">Carcarlo Pravettoni</p>
                            <p class="text">Giornalista</p>
                        </div>
                    </li>
                    <li class="col col-3">
                        <div class="card">
                            <img class="photo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/premi/img/jessicaalba.jpg">
                            <p class="text judge-name">Carcarlo Pravettoni</p>
                            <p class="text">Giornalista</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
