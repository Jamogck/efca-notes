<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EFCA_Notes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( is_single() ) : ?>
				<?php 
				$categories = get_the_category();
					if ( ! empty( $categories ) ) {
					    echo '<h1 class="note-label">' . esc_html( $categories[0]->name ) . '</h1>';   
					}
				?>
			
			<h2 class="entry-title"><?php the_field( 'date' ); ?></h2>
		<?php else : ?>
			<h2 class="entry-title">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_field( 'date' ); ?></a>
			</h2>
		 <?php endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="note-meat">
		<div class="entry-meta">

			<?php if( get_field('downloadable') ): ?>
				<a class="btn" href="<?php the_field('downloadable'); ?>">Save and print</a>
			<?php endif; ?>

			<?php if( get_field('location') ): ?>
				<h3 class="note-label">Location</h3>
				<p><?php the_field('location'); ?></p>
			<?php endif; ?>

			<?php if( get_field('participants') ):?>
				<div class="participants">
					<h3 class="note-label">Present</h3>
					<div class="flex">
						<?php 
							$users= get_field( 'participants' );
							foreach ($users as $user){
								$user_email = $user['user_email'];
								$user_name  = $user['display_name'];
								echo '<div class="participants_single"><a href="mailto:' . $user_email . '">';
								echo get_avatar( $user_email, 50, $default, $user_name );
								echo '</a>';
								echo '<span class="participant_name">' . $user_name . '</span>';
								echo '</div>';
							}
							

						?>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'efca-notes' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>
		</div><!-- .entry-content -->
	</div>

</article><!-- #post-## -->
