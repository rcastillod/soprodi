<?php

/* -------------------------------------------------------------------------- */
/*                             Shortcode Solutions                            */
/* -------------------------------------------------------------------------- */

add_shortcode('solutions', 'soprodius_solutions');

function soprodius_solutions($atts)
{

	$defaultAtts = array(
		'categoria' => ''
	);
	// Get the shortcode attributes
	$attributes = shortcode_atts($defaultAtts, $atts);

	$query_args = array(
		'post_type' => 'solutions',
		'posts_per_page' => 20,
		'order' => 'DESC',
		'orderby' => 'DATE',
		// 'tax_query' => array(
		//   array(
		//     'taxonomy' => 'cat-producto',
		//     'field' => 'slug',
		//     'terms' => $attributes['categoria'],
		//   )
		// )
	);

	$query = new WP_Query($query_args);

	if ($query->have_posts()) {
		ob_start();
?>
		<div class="solutions rotate-anim">
			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php
				// Get the product term
				// $termSlug = '';
				// $terms = get_the_terms(get_the_ID(), 'cat-producto');
				// foreach ($terms as $term) {
				//   $termSlug = $term->slug;
				// }
				//data-term="<?php echo $termSlug;
				?>
				<a href="<?php echo the_permalink(); ?>" class="solution" data-id="<?php echo the_ID(); ?>">
					<div class="solution__image">
						<?php the_post_thumbnail('', ['class' => 'img-fluid']); ?>
					</div>
					<div class="solution__content">
						<img class="solution__content-image" src="<?php echo get_stylesheet_directory_uri() . '/dist/img/isotipo_soprodi.svg' ?>" alt="" />
						<div class="solution__content-title"><?php echo the_title('<h5>', '</h5>'); ?></div>
					</div>
				</a>
			<?php
			endwhile;
			wp_reset_postdata()
			?>
		</div>
		<?php return ob_get_clean(); ?>
<?php
	} else {
		echo "Aun no hay productos disponibles en la categoría " . $attributes['categoria'];
	}
}
