<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */
?>
		</div>
		<div class="bottom-content">&nbsp;</div>
    	
    	<!-- Footer -->
    	<div id="footer">
		<?php if ( is_active_sidebar( 'footer-area' ) ) { 
				dynamic_sidebar( 'footer-area' ); 
			} ?>
			<div class="column">
				<h4>Suivez-nous</h4>
				<ul>
					<li class="twitter"><a href="http://twitter.com/DiamondDiving">Twitter</a></li>
					<li class="facebook"><a href="http://www.facebook.com/pages/Diamond-Diving/8063319234">Facebook</a></li>
                    <li class="linkedin"><a href="http://www.linkedin.com/company/diamond-diving">Linkedin</a></li>
                    <li class="googleplus"><a href="https://plus.google.com/u/0/101382962348476096592/posts">Google+</a></li>
                    <li class="youtube"><a href="http://www.youtube.com/user/DiamondDiving1">YouTube</a></li>
					<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
				</ul>
			</div>
    	</div>
    
    </div>
	<script type="text/javascript"> Cufon.now(); </script>
	<?php wp_footer(); ?>
</body>
</html>
