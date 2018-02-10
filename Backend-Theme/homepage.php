		<?php /* Template Name: Homepage */ ?>

		<?php get_header();?>


		<div class="row">
			<div class="col-md-6">
				<h3>Scopri Progetti</h3>
					
		<form action="<?php echo home_url('progetti'); ?>" method="get">
			  <fieldset>
			<?= do_shortcode('[lb-sl form]');?>
			<label for="autore">Partner Letterario:</label>
                  <select name="ruoli" id="ruoli">
                      <option value="Partner">Partner Letterario</option>
                      <option value="Scuola">Scuola</option>
                      <option value="">......</option>
                  </select>
			<input type="submit" id="searchsubmit" value="Cerca" />
		</fieldset>
		</form>
		</div>
		</div>
		<?php



		$args = array('post_type' => 'News', 'post_for_page' => 3);
		$post_loop = new WP_Query($args);

		if ($post_loop->have_posts()): ?>
			<div id="primary">
				<div id="content" role="main">
					<?php while ($post_loop->have_posts()):

					$post_loop->the_post();

					the_title();
					the_content();
					the_date('d/M/Y');
					?>
					<?php

					if (get_field('città') || get_field('scuola') || get_field('partner_letterario')): ?>

						<p><?php echo the_field('città') ?></p>
						<p><?php echo the_field('scuola') ?></p>
						<p><?php echo the_field('partner_letteraio') ?></p>


					<?php endif; ?>


				</div>
				<?php endwhile; ?>

			</div><!-- #content -->
			</div><!-- #primary -->
		<?php endif; ?>

		<?php get_footer(); ?>


