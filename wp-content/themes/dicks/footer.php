<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<footer class="footer_cell">
		<div class="top-footer">
			<div class="container">
				<ul class="footer_left">
					<h4><strong>Öppettider:</strong></h4>
					<p>Kontor 07.30 – 16.00</p>
					<p>Lunchstängt 11.00 – 12.00</p>
					<p>Butik 06.30 – 16.00 </p>
				</ul>
				<ul class="footer_left">
					<h4><strong>Telefontider:</strong></h4>
					<p>09:00 - 14:00</p>
					<p>12:00 - 13:00</p>
				</ul>
				<div class="footer_right">

				<ul>
				<?php dynamic_sidebar('sidebar-5');?>
				</ul>
				<div id="footer-logo" style="background-image:url('<?php bloginfo('template_url');?>/images/footer-logo.jpg')"></div>
				</div>
			</div>
			</div>
			<div class="bottom-footer">
				<div class="container">
					<?php dynamic_sidebar('sidebar-6');?>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.placeholder.1.3.min.js"></script> 
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.equalheights.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
		
</html>
