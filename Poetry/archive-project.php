<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>


    <div class="wrap">

        <?php if (have_posts()) : ?>
            <header class="page-header">


            </header><!-- .page-header -->
        <?php endif; ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if (have_posts()) : ?>

                    <?php
                    /* Start the Loop */
                    while (have_posts()) : the_post();


                        get_template_part('template-parts/post/content', get_post_format());
                        ?>
                        <p><?php echo the_field('autore') ?></p>


                        <a href="<?php the_field('pdf'); ?>" download>Scarica Progetto</a>


                    <?php endwhile;


                else :

                    get_template_part('template-parts/post/content', 'none');

                endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->

    </div><!-- .wrap -->

<?php get_footer(); ?>