<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ping-passion
 */

get_header();
?>

<main id="primary" class="main-accueil">
	<?php
	while (have_posts()):
		the_post();

		the_content();

	endwhile; // End of the loop.
	?>

	<h2>PING-PASSION</h2>

	<h3>VOUS ACCUEILLE ET VOUS CONSEILLE</h3>

	<p>Du mardi au vendredi de 8h à 18h</p>

	<p>Le samedi de 10h à 18h</p>

	<h4>7 QUAI D'AUSTERLITZ - 75013 PARIS</h4>

</main><!-- #main -->