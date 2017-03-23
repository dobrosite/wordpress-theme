<?php
/**
 * «Шапка» страницы.
 *
 * @copyright  2017, Добро.сайт, http://добро.сайт/
 *
 * @link       https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since      1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri( 'assets/css/style.css' ) ?>">
	<?php wp_head(); ?>
	<script>
		(function( html ) {
			html.className = html.className.replace( /\bno-js\b/, 'js' )
		})( document.documentElement );
	</script>
	<link rel="icon" type="image/png" href="/favicon.png">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
</head>

<body <?php body_class( 'site' ); ?>>
<div class="site__constraint">

	<header class="site__header">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
			   class="site-branding__logo logo logo__link">
				<img src="<?php echo get_theme_file_uri( 'assets/images/logo.png' ) ?>"
					 alt="" class="logo__image">
			</a>

			<?php $title = get_bloginfo( 'name', 'display' );
			if ( $title || is_customize_preview() ) : ?>
				<div class="site-branding__title"><?php echo $title; ?></div>
			<?php endif; ?>

			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<div class="site-branding__activity"><?php echo $description; ?></div>
			<?php endif; ?>
		</div>

		<div class="contacts contacts_in_header">
			<div class="contacts__phones">
				<a href="#">+71234567890</a>
			</div>
			<div class="contacts__im">
				<a href="#">Skype</a>
			</div>
			<div class="contacts__social">
				<a href="#">ВКонтакте</a>
				<a href="#">RSS</a>
			</div>
		</div>

	</header>
