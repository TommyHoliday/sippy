<?php
/**
 * @package _tk
 */
?>

<div class="elastic-video">
<?php $video = get_post_meta($post->ID, 'video', true); echo $video; ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<?php the_time(get_option('date_format')); ?> &ndash; <a href="<?php the_permalink(); ?>#comments" rel="bookmark"><?php echo comments_number( 'no comments', 'one comment', '% comments' ); ?></a>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
