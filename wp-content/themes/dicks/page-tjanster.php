<?php
/**
 * Template Name: tjanster
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

		<div class="sortiment_outer">
			<div class="container">
			<div class="col-md-2">
				<?php $args = array(

			'post_parent' => 55,
			'posts_per_page' => -1,
			'post_type' => 'page'



			);

		
		$posts_array = get_posts( $args ); 


		foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>


		<ul class="tjanst-nav">
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		</ul>


		<?php endforeach; 
		wp_reset_postdata();?>

			</div>

			<div class="col-md-10">
			<div class="gray_cell">
				<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					// Post Content here?>
					<h1 class="cell_heading"><?php the_title(); ?></h1>

					<?php 
					the_content();
					//
				} // end while
			} // end if
?>
</div>
</div>
			</div>
		</div>
<?php
//get_sidebar();
get_footer();
