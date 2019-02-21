<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
        if ( has_post_thumbnail() ) { ?>
        <figure class="featured-image full-bleed">
            <?php
            the_post_thumbnail( 'portfolio-full-bleed');
            ?>
        </figure>
        <?php } ?>

	<div class="entry-content post-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

        <!-- check which page for correct sidebar  -->
<?php if (get_header_image() && is_front_page() ) : ?>
            <?php get_sidebar( 'page'); ?>
        <?php endif; //end check for front page for page-sidebar?>

<?php if (is_page( 'About' ) ): ?>
            <?php get_sidebar( 'about'); ?>
        <?php endif; //end check for about page for page-sidebar?>

<?php if (is_page( 'Qualifications' ) ): ?>
            <?php get_sidebar( 'qualifications'); ?>
        <?php endif; //end check for qualifications page for page-sidebar?>

<?php if (is_page( 'Contact' ) ): ?>
            <?php get_sidebar( 'contact'); ?>
        <?php endif; //end check for contact page for page-sidebar?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'portfolio' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
