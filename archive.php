<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EFCA_Notes
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<script>
				document.getElementById('main').className += ' fade-out';
			</script>

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<ul class="archive-list">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				$post = get_post();
				
				$date = get_field('date', $post->ID);

				echo '<li><h2 class="entry-title"><a ';

						if ( mnp_is_new_post($post) ) {
							echo 'class="unread-post" ';
						}

				echo 'href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $date . '</a></h2></li>';

			endwhile;
			echo '</ul>';

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
