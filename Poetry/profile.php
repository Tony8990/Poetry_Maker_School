<?php /* Template Name: Profile */ ?>

<?php get_header();

echo  do_shortcode('[ultimatemember form_id=6]');


$argProv = array(
    'post_type' => 'project',
    'meta_query' => array(
        array(
            'key' => 'autore',
            'value' => wp_get_current_user()->first_name,
            'compare' => '='
            //  Operatore per testare 'value'. Valori possibili '=', '!=', '>', '>=', '<', '<=', 'LIKE', 'NOT LIKE', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN'
        )
    )
);
$loop = new WP_Query($argProv);


?>




<?php if ($loop->have_posts()): ?>
<div id="primary">
    <div id="content" role="main">


        <?php //if (get_field('user_login')==get_field('autore')):?>
        <?php


        ?>

        <?php while ($loop->have_posts()):$loop->the_post(); ?>


            <div class="row">
                <?php
                if (get_field('pdf')):



                    get_template_part('inc/template-parts/post/content', get_post_format());
                    ?>
                    <p><?php echo the_field('autore'); ?></p>




                    <a href="<?php the_field('pdf'); ?>" download>Scarica Progetto</a>

                    <p><?php //echo cd_display_location($content)?></p>



                <?php endif; ?>


            </div>

        <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #primary -->
<?php endif; ?>


<?php get_footer();?>


