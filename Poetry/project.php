<?php /* Template Name: Project */ ?>

<?php get_header(); ?>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/map.js"></script>

    <div class="main">

        <div id="chartdiv"></div>

        <div class="cerca-progetti">
            <div class="form">
                <p>CERCA TRA GLI ULTIMI PROGETTI PUBBLICATI</p>
                <form class="progetti" action="<?php echo home_url('progetti'); ?>" method="get">
                    <?= do_shortcode('[lb-sl form]');?>
                    <input type="submit" id="searchsubmit" value="Cerca" />
                </form>
            </div>
        </div>

        <div class="row1">
            <ul>
                <li class="element"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/progetti/Resources/Brush.jpg" class="brush"></li>
                <li class="text">Progetti attivi</li>
            </ul>
        </div>

        <?php
        if (isset($_GET['sl-province-1'])) {
            $argProv =array(
                'post_type' => 'project',
                'meta_query'=> array(
                    array(
                        'key' => 'sl-province-1',
                        'value' =>  $_GET['sl-province-1'],
                        'type' => 'numeric',
                        'compare' => '='//  Operatore per testare 'value'. Valori possibili '=', '!=', '>', '>=', '<', '<=', 'LIKE', 'NOT LIKE', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN'
                    )
                )
            );
            $loop = new WP_Query($argProv);
        }else{
            $args = array('post_type' => 'project', 'post_for_page' => 3);
            $loop = new WP_Query($args);

        }


        if ($loop->have_posts()): ?>
            <div id="primary">
                <div id="content" role="main">
                    <?php while ($loop->have_posts()):$loop->the_post();

                        if (get_field('pdf')): ?>

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/css/progetti/Resources/Book.png" class="img">

                            <div class="row2">
                                <h1 class="articleTitle"><?php the_title();?></h1>
                                <h3 class="articleSubTitle"><?php echo the_field('partner_letteraio') ?></h3>
                                <p class="articleText"><?php the_content();?></p>
                                <div class="download">
                                    <a href="<?php the_field('pdf'); ?>" download>Scarica Progetto</a>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/css/progetti/Resources/download-button.png" class="downloadImg">
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endwhile; ?>

                </div><!-- #content -->
            </div><!-- #primary -->
        <?php endif; ?>

    </div><!-- .main -->

<?php get_footer(); ?>