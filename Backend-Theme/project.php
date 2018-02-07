	<?php /* Template Name: Project */ ?>

	<?php get_header();

	?>

	<form action="<?php echo home_url('project'); ?>" method="get">
			<fieldset>
				<?= do_shortcode('[lb-sl form]');?>
				<input type="submit" id="searchsubmit" value="Cerca" />
			</fieldset>
		</form>

	<?php





	if (!empty($_GET['autore'])) {
		$argProv = array(
			'post_type' => 'project',
			'meta_query' => array(
				array(
					'key' => 'autore',
					'value' => $_GET['autore'],
					'compare' => 'LIKE'
					//  Operatore per testare 'value'. Valori possibili '=', '!=', '>', '>=', '<', '<=', 'LIKE', 'NOT LIKE', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN'
				)
			)
		);
		$loop = new WP_Query($argProv);
	}
	elseif (isset($_GET['sl-province-1'])) {
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


<?php get_footer(); ?>