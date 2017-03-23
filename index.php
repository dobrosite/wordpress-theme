<?php
/**
 * Главный файл темы оформления.
 *
 * @copyright 2017, Добро.сайт, http://добро.сайт/
 *
 * @link      https://codex.wordpress.org/Template_Hierarchy
 * @since     1.0
 */

get_header();
?>

	<main class="site__main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text'          => customized_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page',
						'customized' ) . '</span>',
				'next_text'          => '<span class="screen-reader-text">' . __( 'Next page',
						'customized' ) . '</span>' . customized_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page',
						'customized' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>
	</main>
<?php
get_sidebar();

get_footer();
