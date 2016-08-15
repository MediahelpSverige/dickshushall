<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
	
		<div class="sortiment_outer">
			<div class="container">
				<div class="row sortiment_row">
					<div class="col-sm-4 pull-right kintact_form_cont">
						<div class="kintact_form_outer eq_height">
							<ul class="gray_cell address_list">
								<?php dynamic_sidebar('sidebar-7');?>
							</ul>
							<div class="gray_cell text-center">
								<h2 class="form_head">Kontakta oss</h2>
								<p class="sub_text no_padding">
									Vi hör av oss inom kort
								</p>
								<!-- <div class="gray_cell_row">
									<input type="text" class="form_input" placeholder="Namn"/>
								</div>
								<div class="gray_cell_row">
									<input type="text" class="form_input" placeholder="Telefon"/>
								</div>
								<div class="gray_cell_row">
									<input type="text" class="form_input" placeholder="E-post"/>
								</div>
								<div class="gray_cell_row">
									<input type="text" class="form_input" placeholder="Ärende"/>
								</div>
								<div class="gray_cell_row">
									<textarea class="form_input" placeholder="Meddelande"></textarea>	
								</div>	
								<div class="gray_cell_row">
									<button type="submit" class="submit_btn">skicka</button>
								</div>	 -->
								<?php echo do_shortcode('[contact-form-7 id="105" title="Contact us"]');?>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="map_cell eq_height">
							<?php echo get_post_meta('61', 'map', true);?>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
//get_sidebar();
get_footer();
