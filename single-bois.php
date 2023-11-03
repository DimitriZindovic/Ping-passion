<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package salade-bar
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="bois-single-card">
		<?php the_post_thumbnail() ?>
		<div class="bois-single-card-content">
			<h2>
				<?php the_title() ?>
			</h2>
			<?php the_excerpt(); ?>
		</div>
	</div>

</main><!-- #main -->