<footer>
	<div class="container footer-wrapper">
		<?php dynamic_sidebar('footer-widget-area'); ?>
	</div>
	<div class="footer-button-container"><a href="#pageTop" class="smoothScroll">
		<i class="fa fa-chevron-up"></i>
	</a></div>
</footer>
<div class="container">
	<div class="footer-copyright">
		<h6>Ploma Theme by <a href="http://www.prowselikemouse.com" target="_blank">@prowselikemouse</a> - <span class="copyright-wordpress">Powered By <a href="http://wordpress.org">WordPress</a></span></h6>
	</div>
</div>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>