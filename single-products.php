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
		padding: 0 !important;
	}
</style>


<section <?php astra_primary_class('single-products'); ?>>
	<main id="main">

		<?php
		global $post;
		$terms = get_the_terms($post, 'products-category');

		if ($terms && !is_wp_error($terms)) {
			foreach ($terms as $term) {
				$solutionBanner = get_field('term_banner', $term);
				if ($solutionBanner) { ?>

					<div class="section__title-wrapper" style="background-image:url(<?php echo $solutionBanner; ?>)">
						<div class="section__title">
							<?php the_title('<h2 class="section__title-heading">', '</h2>'); ?>
						</div>
					</div><!-- .section-title -->
		<?php
				}
			}
		}
		?>

		<div class="section__content">
			<div class="page-wrapper">
				<div class="section__content-wrapper">
					<div class="back__button-wrapper">
						<span onclick="goBack()" class="back__button">
							Volver
							<span class="arrow">
								<svg fill="rgb(183, 128, 255)" viewBox="0 0 320 512" height="1em" xmlns="http://www.w3.org/2000/svg">
									<path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
								</svg>
							</span>
						</span>
					</div>
					<div class="section__content-wrapper--inner">
						<div class="section__content-image">
							<?php echo get_the_post_thumbnail(); ?>
							<div class="section__content-image--blur">
								<?php echo get_the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="section__content-description">
							<?php the_content(); ?>
						</div>
					</div>
				</div><!-- /.section__content-wrapper -->
			</div><!-- /.page-wrapper -->
		</div><!-- /.section__content -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php




get_footer();
