<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<h1>&laquo; <a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo $post->post_content; ?></a> &raquo;</h1>
		<h2><?php the_title(); ?></h2>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
