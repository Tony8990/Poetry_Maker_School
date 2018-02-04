<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<?php

$quote_args = array('post_type'=>'quote','post_for_page'=>1);
$quote_loop = new WP_Query($quote_args);

if ($quote_loop->have_posts()):?>

    <?php while ($quote_loop->have_posts()):$quote_loop->the_post();?>
        <div>
            <?php get_template_part( 'inc/template-parts/post/content', get_post_format() );?>
            <p><?php echo the_field('autore') ?></p>
        </div>
    <?php endwhile;

endif;

$args = array('post_type'=>'News','post_for_page'=>3);
$post_loop = new WP_Query($args);

if ($post_loop -> have_posts()): ?>

    <div id="primary">
        <div id="content" role="main">
            <?php while ($post_loop->have_posts()):$post_loop->the_post();

            get_template_part( 'inc/template-parts/post/content', get_post_format() );

            if( get_field('Città')||get_field('scuola')||get_field('partner_letterario')): ?>
                <p><?php echo the_field('Città') ?></p>
                <p><?php echo the_field('scuola') ?></p>
                <p><?php echo the_field('partner_letteraio')?></p>
            <?php endif; ?>

            <?php endwhile; ?>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php endif;?>

<?php get_footer();?>


