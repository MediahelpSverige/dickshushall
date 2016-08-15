<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container">
			<div class="gray_cell">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content();?>
						<?php endwhile;?>
			</div>
		</div>
<?php
//get_sidebar();
get_footer();
