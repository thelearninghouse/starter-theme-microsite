</div>
<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

	<div class="wrap-lg brand-line">

		<ul class="footer__copyright">
			<li>&copy; <?php echo date('Y'); ?> <?php the_field('school_name', 'options'); ?></li>
			<li class="school-address"><span><?php the_field('school_address_1', 'options'); ?>,</span> <span><?php the_field('school_address_2', 'options'); ?></span></li>
			<li class="school-phone"><?php the_field('school_phone', 'options'); ?></li>
			<li><a href="/privacy-policy/">Privacy Policy</a></li>
		</ul>

	</div>

</footer>

</div>

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

	<?php // better font loading with fontfaceobserver ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/library/bower_components/fontfaceobserver/fontfaceobserver.js">
	<script>
	new w.FontFaceObserver( "Source Sans Pro" )
			.check()
					.then( function(){
									w.document.documentElement.className += " fonts-loaded";
											});
	</script>


</body>

</html> <!-- end of site. what a ride! -->
