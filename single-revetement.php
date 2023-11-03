<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package salade-bar
 */
$dataRevetement = get_fields();
get_header();
?>

<main id="primary" class="site-main">

	<div class="revetement-single-card">
		<?php the_post_thumbnail() ?>
		<div class="revetement-single-card-content">
			<h2>
				<?php the_title() ?>
			</h2>
			<?php the_excerpt(); ?>

			<section>
				<h2>Informations</h2>
				<p>Rapidité :
					<?= $dataRevetement['rapidite'] ?>
				</p>
				<p>Contrôle :
					<?= $dataRevetement['controle'] ?>
				</p>
				<p>Adhérence :
					<?= $dataRevetement['adherence'] ?>
				</p>
				<p>Epaisseur :
					<?php foreach ($dataRevetement['epaisseur'] as $epaisseur): ?>
						<?= $epaisseur['taille'] ?>
					<?php endforeach; ?>
				</p>
			</section>
		</div>
	</div>

</main><!-- #main -->