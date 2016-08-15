<?php
/**
 * Template Name: Sort Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

		<div class="sortiment_outer">
			<div class="container">
					<?php query_posts('cat=5&order=DESC'); 
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
<?php
//get_sidebar();
get_footer();
