<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

get_header();
?>

<style>
	.site-content .ast-container {
		max-width: 100%;
		padding: 0;
	}
</style>


<section id="primary" <?php astra_primary_class('single-solutions'); ?>>
	<main id="main">

		<?php
		$solutionBanner = get_field('banner');
		?>
		<div class="section__title-wrapper" style="background-image:url(<?php echo $solutionBanner; ?>)">
			<div class="section__title">
				<?php the_title('<h2 class="section__title-heading">', '</h2>'); ?>
			</div>
		</div><!-- .section-title -->

		<?php
		$featured_products = get_field('productos');
		?>

		<div class="section__content">
			<div class="page-wrapper">
				<div class="section__content-wrapper <?php echo $featured_products ? 'section__content-wrapper--two-columns' : ''; ?>">
					<?php
					if ($featured_products) : ?>
						<div class="section__sidebar">
							<div class="section__sidebar-title">
								<h3 class="section__title-heading">Products</h3>
							</div>
							<ul class="section__sidebar-list">
								<?php foreach ($featured_products as $product) :

									// Setup this post for WP functions (variable must be named $post).
									setup_postdata($product); ?>
									<?php
									// Replace 'category' with the taxonomy you want to retrieve terms from (e.g., 'category', 'post_tag')
									$taxonomy = 'products-category';

									// Get the terms associated with the post
									$terms = wp_get_post_terms($product->ID, $taxonomy);

									// Check if there are any terms
									if (!empty($terms)) {
										foreach ($terms as $term) {
											echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a> ';
										}
									} else {
										echo 'No terms found.';
									}
									?>
									<li>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
							<?php
							// Reset the global post object so that the rest of the page works correctly.
							wp_reset_postdata(); ?>
						</div>
					<?php endif; ?>

					<?php the_content(); ?>
				</div><!-- /.section__content-wrapper -->
			</div><!-- /.page-wrapper -->
		</div><!-- /.section__content -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
