<?php /* Template Name: Project */ ?>

<?php get_header(); ?>

<?php

$args = array('post_type'=>'project','post_for_page'=>3);
$loop = new WP_Query($args);

if ($loop -> have_posts()): ?>
    <div id="primary">
        <div id="content" role="main">
        <?php //echo do_shortcode( '[ultimatemember form_id=152]' ) ?>
        <?php //if (get_field('user_login')==get_field('autore')):?>
        <?php while ($loop->have_posts()):$loop->the_post(); ?>

            <div class="row">
            <?php if( get_field('pdf')):

                get_template_part( 'inc/template-parts/post/content', get_post_format() ); ?>

                <p><?php echo the_field('autore'); ?></p>
                <p><?php echo the_field('regione'); ?></p>
                <p><?php echo the_field('provincia'); ?></p>
                <p><?php echo the_field('città'); ?></p>
                <a href="<?php the_field('pdf'); ?>" download>Scarica Progetto</a>

            <?php endif;?>

            </div>

        <?php endwhile; ?>
        </div><!-- #content -->
    </div><!-- #primary -->
<?php endif; ?>

<?php get_footer();?>