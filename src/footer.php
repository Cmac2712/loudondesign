	<footer>
	<div class="wrap wrap--footer">
	    <div class="footer-block hire-me">
	    <div class="footer-block__image hire-me__image">
		<?php echo file_get_contents(get_template_directory_uri().'/img/logo.svg'); ?>   
	    </div>
	    <div class="footer-block__text hire-me__text">
	        <h5>Hire me for your Design Work</h5>
	        <p>If you would like to contact me in regards to any freelance design work or just to say hello you can email me directly at: <a href="mailto:john@loudondesign.com">john@loudondesign.com</a> or text/call <a href="tel:07980961805">07572750380</a></p>
	    </div>
	    </div>
	    <div class="footer-block newsletter">
	    <div class="footer-block__image newsletter__image">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/newsletter.png" alt="John Loudon Design">
	    </div>
	    <div class="footer-block__text newsletter__text">
	        <h5>Signup for the</h5>
	        <p>Loudon Design Newsletter</p>
	        <form action="">
		    <input type="" placeholder="Your Email Address"><button class="button--raquo"></button>
	        </form>
	    </div>
	    </div>


	</div>
	
	<div class="wrap wrap--footer">
	    <nav class="nav--footer">
	    <div class="nav-list nav-list--one">
	        <h5><span role="button" class="toggle-button" data-section="#js-footer-block-1">Design<span class="icon-chevron-down flip"></span></span></h5> 
		<?php echo footer_design_menu_nav(); ?>
	    </div>
	    <div class="nav-list nav-list--two">
	        <h5><span role="button" class="toggle-button" data-section="#js-footer-block-2">Business<span class="icon-chevron-down flip"></span></span></h5>
		<?php echo footer_business_menu_nav(); ?>
	    </div>
	    <div class="nav-list nav-list--three">
	        <h5><span role="button" class="toggle-button" data-section="#js-footer-block-3">About<span class="icon-chevron-down flip"></span></span></h5>
		<?php echo footer_about_menu_nav(); ?>
	    </div>
	    <div class="nav-list nav-list--four">
	        <h5 class="contact">Connect</h5>
	        <ul class="social-links">
		    <li><a href=""><span class="icon-facebook-with-circle"></span></a></li>
		    <li><a href="https://twitter.com/loudondesign"><span class="icon-twitter"></span></a></li>
		    <li><a href="#"><span class="icon-pinterest"></span></a></li>
	        </ul>
	    </div>
	    </nav>
	    <p class="copyright">
		    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
	    </p>
	</div>
        </footer>



		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
