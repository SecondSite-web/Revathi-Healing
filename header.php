<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "body-content-wrapper" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<?php
            if ( is_singular() && pings_open() ) :
                printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
            endif;
        ?>
		<meta name="viewport" content="width=device-width" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri().'/'; ?>apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri().'/'; ?>favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri().'/'; ?>favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_stylesheet_directory_uri().'/'; ?>site.webmanifest">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<a class="skip-link screen-reader-text" href="#main-content-wrapper">
			<?php _e( 'Skip to content', 'ayamedicine' ); ?>
		</a>
		<div id="body-content-wrapper">
			
			<header id="header-main-fixed">

				<div id="header-content-wrapper">

					<div id="header-logo">
						<?php
							if ( function_exists( 'the_custom_logo' ) ) :

								the_custom_logo();

							endif;

							$header_text_color = get_header_textcolor();

						    if ( 'blank' !== $header_text_color ) :
						?>    
						        <div id="site-identity">

						        	<a href="<?php echo esc_url( home_url('/') ); ?>"
						        		title="<?php esc_attr( get_bloginfo('name') ); ?>">

						        		<h1 class="entry-title">
						        			<?php echo esc_html( get_bloginfo('name') ); ?>
										</h1>
						        	</a>
						        	<p id="site-tagline">
						        		<?php echo esc_html( get_bloginfo('description') ); ?>
						        	</p>
						        </div>
						<?php
						    endif;
						?>
					</div><!-- #header-logo -->

					<nav id="navmain">
						<?php wp_nav_menu( array( 'theme_location' => 'primary',
												  'fallback_cb'    => 'wp_page_menu',
												  
												  ) ); ?>
					</nav><!-- #navmain -->
					
					<div class="clear">
					</div><!-- .clear -->

				</div><!-- #header-content-wrapper -->

			</header><!-- #header-main-fixed -->
			<div class="clear">
			</div><!-- .clear -->


			<?php if ( is_front_page() && get_option( 'show_on_front' ) == 'page' ) : ?>
			
					<?php if ( get_theme_mod('ayamedicine_slider_display', 0) == 1 ) : ?>

							<div id="slider-content-wrapper">
								<div id="slider-inner-content-wrapper">
									<?php ayamedicine_display_slider(); ?>
								</div><!-- #slider-content-wrapper -->
							</div><!-- #slider-inner-content-wrapper -->

					<?php endif; ?>

					
			
			<?php endif; ?>
