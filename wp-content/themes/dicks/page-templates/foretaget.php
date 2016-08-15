<?php
/**
 * Template Name: foretaget Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

		<div class="sortiment_outer">
			<div class="container">
					<?php query_posts('cat=6&order=DESC'); 
					$i=0;
				while ( have_posts() ) : the_post(); ?>
				<div class="row sortiment_row">
					<div class="col-sm-4 <?php if($i%2 == 0){ ?>pull-right<?php }?> sortiment_imgcell">
						<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
						<div class="col-image eq_height" style="background: url(<?php echo $large_image_url[0]; ?>) no-repeat; background-size: cover;">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="gray_cell eq_height">
							<h1 class="cell_heading"><?php the_title();?></h1>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php $i++; endwhile; ?>	
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
