<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>
<!--
<div class="row">
    <div class="col-md-6">
        <h3>Scopri Progetti</h3>

        <form action="<?php /*echo home_url('progetti'); */?>" method="get">
            <fieldset>
                <?/*= do_shortcode('[lb-sl form]');*/?>
                <label for="autore">Partner Letterario:</label>
                <input type="text" name="autore" id="autore" value="" placeholder="Ricerca Partner"/>
                <input type="submit" id="searchsubmit" value="Cerca" />
            </fieldset>
        </form>
    </div>
</div>-->

<div class="sfondo">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/css/homepage/immagini/poetry-main.jpg" />
    <div class="text">
        <p><strong>Poesia e Concorsi</strong></p>
        <p class="sottotitolo">Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="button-container">
        <button type="button" id="bottone">ISCRIVITI</button>
    </div>
    <div class="blog">
        <p>LEGGI IL NOSTRO BLOG</p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/css/homepage/immagini/down-arrow.png" />
    </div>
</div>

<div class="cerca-progetti">
    <div class="form">
        <p>CERCA TRA GLI ULTIMI PROGETTI PUBBLICATI</p>
        <form class="progetti" action="<?php echo home_url('progetti'); ?>" method="get">
            <?= do_shortcode('[lb-sl form]');?>
            <input type="submit" id="searchsubmit" value="Cerca" />
        </form>
    </div>
</div>

<div class="slide">
    <p class="title">L' infinito</p>
    <p class="poesia">Sempre caro mi fu quest’ermo colle, E questa siepe, che da tanta parte Dell’ultimo orizzonte il guardo esclude.</p>
    <p class="author">Leopardi</p>
</div>

<div class="row1">
    <ul>
        <li class="element"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/homepage/immagini/Brush.jpg" class="brush"></li>
        <li class="testo">Ultime news</li>
    </ul>
</div>

<?php
$args = array('post_type' => 'News', 'post_for_page' => 3);
$post_loop = new WP_Query($args);


if ($post_loop->have_posts()): ?>
    <div id="primary">
        <div id="content" role="main">
            <?php while ($post_loop->have_posts()):$post_loop->the_post();

                if (get_field('città') || get_field('scuola') || get_field('partner_letterario')): ?>

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/css/homepage/immagini/poetry-main.jpg" class="img">

                    <div class="row2">
                        <h1 class="articleTitle"><?php the_title();?></h1>
                        <h6 class="data"><?php the_date();?></h6>
                        <h3 class="articleSubTitle">
                            <ul>
                                <li class="li"><?php echo the_field('città') ?></li>
                                <li class="li"><?php echo the_field('scuola') ?></li>
                                <li class="li"><?php echo the_field('partner_letteraio') ?></li>
                            </ul>
                        </h3>
                        <p class="articleText"><?php the_content();?></p>
                        <div class="more">
                            <p class="moreText">Leggi di più</p>
                        </div>
                    </div>

                <?php endif; ?>

            <?php endwhile; ?>

        </div><!-- #content -->
    </div><!-- #primary -->
<?php endif; ?>

<?php get_footer(); ?>


