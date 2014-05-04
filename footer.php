<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->


<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">
			
				<div class="site-info">
					<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/includes/images/logo.png" alt="Thomas Veit Logo"></a>
					<br /> <br />
					This minimal wordpress theme is called <strong>&laquo;sippy&raquo;</strong> and is designed by Thomas Veit. <br />
					You can <a href="http://blog.thomasveit.com/sippy-free-wordpress-theme/">download this theme</a> for free.
				</div><!-- close .site-info -->
			
			</div>	
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->



<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26266386-1', 'thomasveit.com');
  ga('send', 'pageview');

</script>
</body>
</html>