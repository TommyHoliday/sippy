<?php
/**
 * @package _tk
 */
?>

<a href="<?php the_permalink(); ?>" rel="bookmark">
<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	  the_post_thumbnail('blog-post-thumbnail');
	} 
?>
</a>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="page-header">
		<h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_time(get_option('date_format')); ?> &ndash; <a href="<?php the_permalink(); ?>#comments" rel="bookmark"><?php echo comments_number( 'no comments', 'one comment', '% comments' ); ?></a> 
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_tk' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post-## -->
