<?php
/**
 * Template Name: Form Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container">
			<div class="gray_cell">
					<div class="form_head_part">
					<h2 class="form_head text-center">Felanmälan kommersiella produkter </h2>
					<p class="sub_text">
						<span>För företag:</span> Boka service på Er utrustning som används i kommersiellt bruk.
	(Privatpersoner hänvisar vi till Felanmälan - Vitvaror)
					</p>
					<h3 class="bot_head text-center">OBS! Information märkt med * är nödvändig för att vi ska kunna behandla Era uppgifter.</h3>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="96" title="form1new"]');?>
			</div>
		</div>
<?php
//get_sidebar();
get_footer();
