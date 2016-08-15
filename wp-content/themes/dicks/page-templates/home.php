<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container banner_container">
			<div class="custom1">
				<?php query_posts('cat=2&order=DESC'); 
				while ( have_posts() ) : the_post(); ?>
			    <div class="item">
			    	<div class="banner_text">
			    		<h1><?php the_title();?></h1>
			    		<?php the_content();?>
			    	</div>
			    	<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?><img src="<?php echo $large_image_url[0]; ?>" alt="">
			    </div>
			    <?php endwhile; ?>
			</div>
		</div>
		
		<div class="service_container">
			<div class="container">
				<div class="service_text">
					<h1><?php echo get_the_title(22);?></h1>
					<p><?php $page_id=get_post(22); echo $page_id->post_content;?></p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="service_cols">
							<h2><?php echo get_the_title(24);?></h2>
							<p><?php $page_id=get_post(24); echo $page_id->post_content;?></p>
							<div class="more_cell">
								<a href="<?php echo get_field('link',24);?>" class="more_btn"><span>LÄS MER</span> <span class="arrow_cell"></span></a>
							</div>
						</div>					
					</div>
					<div class="col-sm-4">
						<div class="service_cols">
							<h2><?php echo get_the_title(26);?></h2>
							<p><?php $page_id=get_post(26); echo $page_id->post_content;?></p>
							<div class="more_cell">
								<a href="<?php echo get_field('link',26);?>" class="more_btn"><span>LÄS MER</span> <span class="arrow_cell"></span></a>
							</div>
						</div>						
					</div>
					<div class="col-sm-4">
						<div class="service_cols">
							<h2><?php echo get_the_title(53);?></h2>
							<p><?php $page_id=get_post(53); echo $page_id->post_content;?></p>
							<div class="more_cell">
								<a href="<?php echo get_field('link',53);?>" class="more_btn"><span>LÄS MER</span> <span class="arrow_cell"></span></a>
							</div>
						</div>						
					</div>
					<!--<div class="col-sm-4">
						<div class="service_cols">
							<h2>kontakta oss</h2>
							<!-- <div class="mail_form"> -->
								<!-- <input type="text" class="form_imput" placeholder="Namn" />
								<input type="text" class="form_imput" placeholder="E-post" />
								<input type="text" class="form_imput" placeholder="Telefon" />
								<textarea class="form_imput" placeholder="Meddelande"></textarea>
								<div class="more_cell">
									<button type="submit" class="more_btn"><span>Skicka</span> <span class="arrow_cell"></span></button>
								</div> -->
								<?php// echo do_shortcode('[contact-form-7 id="104" title="contact home"]');?>
							<!-- </div>		 -->					
						</div>
						<div class="row">
							<div class="col-sm-4">
						<div class="service_cols">
							<h2>Felanmäl dina <?php echo get_the_title(108);?></h2>
							<p><?php $page_id=get_post(108); echo $page_id->post_content;?></p>
							<div class="more_cell">
								<a href="<?php echo get_field('link',108);?>" class="more_btn"><span>LÄS MER</span> <span class="arrow_cell"></span></a>
							</div>
						</div>					
					</div>
					<div class="col-sm-4">
						<div class="service_cols">
							<h2>Tjänst 3<?php// echo get_the_title(106);?></h2>
							<p><?php $page_id=get_post(106); echo $page_id->post_content;?></p>
							<div class="more_cell">
								<a href="<?php echo get_field('link',106);?>" class="more_btn"><span>LÄS MER</span> <span class="arrow_cell"></span></a>
							</div>
						</div>						
					</div>
					<div class="col-sm-4">
						<div class="service_cols">
							<h2>Tjänst 4<?php //echo get_the_title(26);?></h2>
							<p><?php $page_id=get_post(26); echo $page_id->post_content;?></p>
							<div class="more_cell">
								<a href="<?php echo get_field('link',26);?>" class="more_btn"><span>LÄS MER</span> <span class="arrow_cell"></span></a>
							</div>
						</div>						
					</div>
						</div>							
					<!--</div>-->
				</div>
			</div>
		</div>

		<div class="client_cell">
			<div class="container">
				<div class="head_client">MÄRKEN VI JOBBAR MED</div>
				<div class="row client_bottom">
					<?php query_posts('cat=3&order=DESC'); 
				while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-2 col-xs-4">
						<div class="client_in"><?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?><img src="<?php echo $large_image_url[0]; ?>" alt=""></div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
<?php
//get_sidebar();
get_footer();
