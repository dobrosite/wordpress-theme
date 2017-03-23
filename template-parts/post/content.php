<?php
/**
 * Шаблон записи.
 *
 * @copyright 2017, Добро.сайт, http://добро.сайт/
 *
 * @link      https://codex.wordpress.org/Template_Hierarchy
 * @since     1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo customized_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="post__header">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="post__meta">
				<?php
				if ( is_single() ) :
					customized_print_post_meta();
				else :
					echo customized_get_post_time_link();
				endif;
				?>
			</div>
			<?php
		endif;

		if ( is_single() ) :
			the_title( '<h1 class="post__title">', '</h1>' );
		else :
			the_title( '<h2 class="post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
				'</a></h2>' );
		endif;
		?>
	</header>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post__thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'customized-featured-image' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="post__content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'customized' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'customized' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div>

	<?php if ( is_single() ) : ?>
		<?php customized_entry_footer(); ?>
	<?php endif; ?>

</article>
