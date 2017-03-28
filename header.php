<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EFCA_Notes
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://use.typekit.net/xnj6ywa.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<div class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'efca-notes' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 21.7 22.8" enable-background="new 0 0 21.7 22.8" xml:space="preserve">
						<g>
							<polygon points="15.5,7.7 15.5,7.7 15.5,7.7 	"/>
							<path d="M5.6,21C7,20.6,8,20.4,9.3,20.2c0,0,0,0,0,0c0.6-3.2,0.6-4.5,0.6-4.5c0-0.5-0.1-0.9-0.4-1.2c-0.6-0.7-1.8-0.9-3.9-1
								c0.1-0.1,0.2-0.2-0.6-0.6c1.6,0.4,1.3-0.3,4.3,0.4c0.2,0,0.6-0.1,0.7-0.5c0.1-0.4,0.1-1.7,0.2-2.6c0.2,0,0.8,0,1.2-1
								c0,1.3,0.2,2.9,0.3,3.3c0.2,0.5,0.5,0.6,0.7,0.6c0,0,0.1,0,0.1,0c0.4-0.1,1-0.1,1.5,0c1.3,0.3,2-0.1,2.6-0.3c0,0.2-1,1-2.2,1.1
								c-0.5,0-2.3-0.1-2.5,1.2c-0.1,1.6,0.2,3.8,0.7,5.4c0,0,0,0,0,0c1.6,0.2,2.7,0.5,3.5,0.8c3-1.8,5-5.1,5-8.9
								c0-5.7-4.6-10.3-10.3-10.3C5.1,1.8,0.5,6.4,0.5,12.1C0.5,15.9,2.5,19.2,5.6,21z M19.9,12.3C19.9,12.3,19.9,12.3,19.9,12.3
								c-0.3-0.1-0.7,0.1-1,0.2c-1,0.6-2.1,0.1-2.2-0.4c-0.3,0.1-0.6,0.3-0.9,0.5l0-0.2c0,0,0.2-0.1,0.9-0.5
								C17.1,11.1,19.2,10.9,19.9,12.3z M15.9,10.5c0.2-0.2,0.5-0.2,1.1-0.2c0,0.5-0.5,1.2-1.3,1.4c-0.8-0.3-0.8-0.1-0.7,0
								c0.1,0.1,0.3,0.2,0.6,0.2c-0.4,0.3-0.8,0.5-1.5,0.3c-0.3-0.1-0.4-0.2-0.5-0.3c-0.6,0.3-1,0.5-1.1,0.5l-0.3-0.2c0,0,0,0,0.1,0
								c0.4-0.2,0.7-0.3,1.1-0.5c0,0-0.3-0.1-0.5-0.3c-0.3-0.2-0.8-0.9-0.2-1.8c-0.1,0.5,0.7,1.1,0.2-0.2c0.2-0.4,0.5-0.9,1.3-1.1
								c0,0.2,0.3,0.7,0,1.1c-0.2,0.2,0,0.3,0,0.3c0.1,0,0.3-0.1,0.4-0.4C15.1,7.9,16.3,8,17.2,8c-0.1,0.4-0.1,1.3-0.3,1.6
								c-0.3,0.3-0.6,0.5-1,0.6c-0.3,0.1-0.5,0.3-0.5,0.4C15.5,10.6,15.6,10.7,15.9,10.5z M14.8,8L14.8,8L14.8,8L14.8,8z M13.6,7.2
								c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.2-0.1-0.6,0-0.5c0,0,0.1,0,0.1,0c0-0.2,0.2-0.6,0.2-0.5c0,0,0.1,0.1,0.1,0.1
								c0.1-0.2,0.4-0.5,0.4-0.4c0,0.1,0.1,0.1,0.1,0.1c0.1-0.2,0.4-0.5,0.4-0.4c0,0,0,0.1,0.1,0.1c0,0,0-0.1,0.1-0.1
								C15,5.2,15.2,5,15.2,5.1c0,0,0,0.1,0.1,0.1c0.1-0.1,0.5-0.3,0.5-0.2c0,0,0,0.1,0,0.1c0,0,0,0,0,0C16,5,16,4.8,16,4.7
								c0.1,0.2,0.1,0.3,0.1,0.5c0,0,0,0,0,0.1c0,0,0.1,0,0.1,0c0.1-0.1,0.1,0.3,0,0.5c0,0,0.1,0,0.1,0c0.1-0.1-0.1,0.4-0.2,0.5
								c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0.1,0-0.1,0.4-0.2,0.5c0,0,0.1,0,0.1,0c0.1,0-0.1,0.2-0.2,0.3c0,0,0,0.1,0.1,0.1
								c0.1,0-0.2,0.2-0.4,0.3c0,0,0,0.1,0.1,0.1c0.1,0-0.3,0.1-0.5,0.1c0,0,0,0.1,0,0.1c0.1,0-0.3,0.1-0.5,0c0,0,0,0.1,0,0.1
								c0.1,0.1-0.6-0.1-0.7-0.4c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0.1C13.3,8,12.8,8,12.8,8l-0.1-0.2c0.2,0,0.4,0,0.5-0.1c0.1,0,0.1,0,0.2-0.1
								v0c0,0,0,0,0,0C13.7,7.6,14,7.4,14,7.4S13.9,7.4,13.6,7.2z M15.2,7.8L15.2,7.8C15.2,7.8,15.2,7.8,15.2,7.8L15.2,7.8z M9.2,6.7
								C8.9,6.1,9,5.5,9.3,4.9C9.5,5,9.5,5.2,9.7,5.3c-0.2-0.9,1-1.4,1-2.3c0.8,0.4,1.3,1,1.4,1.7c0.2-0.1,0.1-0.3,0.3-0.4
								c0.4,0.6,0.5,1.3,0.1,1.9C12.7,6.2,12.8,6,13,6.1c-0.1,0.7-0.7,1.7-1.4,2c-0.4,1.1-1,1.6-1,1.6l-0.4-0.1c0.4-0.4,0.8-1,1-1.4
								c0,0-0.4,0.1-0.6,0C9.7,8.1,8.9,7.2,8.9,6.6C9,6.5,9.1,6.7,9.2,6.7z M5.7,5.3c0-0.2,0-0.3,0-0.4c0-0.2,0-0.2,0.1-0.2
								c0,0,0.1,0.2,0.2,0.3C6.1,5,6.2,5,6.3,5c0,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.2c0,0,0.1-0.1,0.5,0c0.2,0.1,0.4,0.3,0.5,0.5
								c0,0,0.3-0.4,0.6,0.4c0.2,0.6-0.1,1-0.1,1c0,0,0,0,0,0.1C8.1,7.4,7.9,7.5,7.8,7.6C8.2,7.7,8.5,7.9,9,7.9L8.9,8.1c0,0-0.6,0-1.3-0.4
								c-0.3,0.1-0.9,0-1.2-0.2C5.4,7,5.8,6.4,5.8,6.4C5.6,6,5.7,5.6,5.7,5.3z M4.5,7.9C4.5,7.9,4.5,7.9,4.5,7.9C4.6,7.9,4.6,7.9,4.5,7.9
								c0.1-0.1,0.4-0.2,0.7,0.2c0,0,0,0.1,0.1,0.1c0-0.2,0.2-0.3,0.3-0.2C6.2,8,6.1,8.6,6.1,8.8c0,0.1,0,0.3,0.2,0.3
								c0.3,0,0.1-0.8,0.1-0.9c-0.1-0.3,0.4-0.4,0.5,0c0-0.1,0.2-0.3,0.4-0.1c0.3,0.3-0.5,1.3,0,1.4c0.2,0.1,0.4-0.5,0.6-0.8
								C8.1,8.3,8.8,8.7,8.7,9c0.2-0.1,0.4,0,0.5,0.2c0,0.1,0,0.2,0,0.2c0,0.7-0.5,1.5-0.9,1.9c-0.2,0.2-0.1,0.3-0.1,0.3
								c0.4,0.2,0.8,0.4,1.4,0.5l-0.2,0.2c-1.1-0.3-1.5-0.6-1.5-0.6c-0.4,0.1-1.2,0.5-1.7,0.2c0,0-0.3-0.2-0.2-0.4
								c-0.3,0.1-0.6-0.4-0.2-0.6c0.4-0.2,0.7-0.3,0.6-0.5c-0.1-0.4-1.1,0.3-1.4,0c-0.2-0.2-0.1-0.4,0.1-0.4c-0.4-0.1-0.3-0.6,0-0.5
								c0.1,0,0.7,0.2,0.7-0.1c0-0.1-0.2-0.1-0.2-0.1c0,0-0.4,0-0.6-0.2C4.7,9.1,4.6,8.9,4.6,8.9c0-0.2,0-0.4,0.2-0.3c0,0-0.1,0-0.1-0.1
								C4.4,8.3,4.5,8,4.5,7.9z M2.9,12.8C2.9,12.7,2.9,12.7,2.9,12.8c-0.7,0-1-0.2-1.1-0.3c0,0-0.1-0.1-0.1-0.1s0.5,0,1-0.4
								c0.2-0.3,0.5-0.4,0.5-0.4c-0.2-0.2,0-0.3,0.2-0.3c0.2,0,0.3,0,0.3,0c-0.2-0.3,0.9-0.3,1.4,0.5c0.1,0.2,0.1,0.2,0.3,0.4l0,0
								c0.2,0.1,0.3,0.2,0.4,0.3c0,0,0.1,0,0.1,0l0,0c0,0,0,0,0,0l0,0.2c-0.1-0.1-0.2-0.2-0.3-0.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0
								c0,0,0,0,0,0c0,0,0,0,0,0c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.2,0-0.4,0C3.5,13.1,3,12.9,2.9,12.8z"/>
						</g>
					</svg>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				
				<?php 
					$presCouncilId   = get_the_category(4);
					$presCouncilLink = get_category_link( $presCouncilId );
					$reachGlobalId   = get_the_category(5);
					$reachNationalId = get_the_category(6);
					$natOfficId      = get_the_category(3);
				?>

				<ul class="menu">
					<li class="menu-item">
						<a 
							<?php if (mnp_new_posts_count('category_name=presidents-council') >= 1 ) {
						 		echo 'class="unread"';
						 	} ?>
							href="<?php echo site_url( '/presidents-council' ); ?>">President's Council
						</a>
					</li>
					<li class="menu-item">
						<a 
							<?php if (mnp_new_posts_count('category_name=reachglobal-directional') >= 1 ) {
						 		echo 'class="unread"';
						 	} ?>
							href="<?php echo site_url( '/reachglobal-directional' ); ?>">ReachGlobal Directional Team
						</a>
					</li>
					<li class="menu-item">
						<a 
							<?php if (mnp_new_posts_count('category_name=reachnational-directional') >= 1 ) {
						 		echo 'class="unread"';
						 	} ?>
							href="<?php echo site_url( '/reachnational-directional'); ?>">ReachNational Directional Team
						</a>
					</li>
					<li class="menu-item">
						<a 
							<?php if (mnp_new_posts_count('category_name=national-office') >= 1 ) {
						 		echo 'class="unread"';
						 	} ?>
							href="<?php echo site_url( '/national-office'); ?>">National Office
						</a>
					</li>
				</ul>
			</nav><!-- #site-navigation -->
			<?php
			if ( is_user_logged_in() ) {
				if ( is_single() ) :
					echo '<a class="btn btn-edit" href="' . get_edit_post_link() . '">Edit Note</a>';
				endif;
			   echo '<a class="btn" href="' . esc_url( home_url( '/' ) ) . 'wp-admin/post-new.php">New Note</a>'; 
			  } else {
			    // your code for logged out user 
			  }
			 ?>
			 <aside>
			 	<p>This resource was joyfully contributed by your EFCA Communications team. <a href="mailto:communications@efca.org">Send us your questions and feedback</a>.
			 </aside>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
