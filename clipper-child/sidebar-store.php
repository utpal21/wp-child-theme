<?php
/**
 * Store Sidebar template.
 *
 * @package Clipper\Templates
 * @author  AppThemes
 * @since   Clipper 1.0
 */
?>


<div id="sidebar">

	<?php appthemes_before_sidebar_widgets( 'store' ); ?>

	<?php if ( ! dynamic_sidebar( 'sidebar_store' ) ) : ?>
		<!-- no dynamic sidebar so don't do anything -->
	<?php endif; ?>
	<div class="Store_Logo">
		<div class="content_title">
			<h4>Popular Companies</h4>
		</div>
		<?php
		
			// show all coupons and setup pagination
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			query_posts( array( 'post_type' => APP_POST_TYPE, 'post_status' => $post_status, 'ignore_sticky_posts' => 1, 'paged' => $paged) );
		?>
		<?php if ( have_posts() ) : 
			while ( have_posts() ) : the_post();
		?>
		<div class="st_logo_img">
			<a href="<?php echo clpr_store_url( $post->ID,'post_id', 110); ?>"><img src="<?php echo clpr_get_store_image_url( $post->ID, 'post_id', 110 ); ?>" alt="" /></a>
		</div>
		<?php endwhile; endif;?>
	
	</div>
	<div class="Store_Logo">
		<div class="content_title">
			<h4>Instructions</h4>
		</div>
		<?php dynamic_sidebar('instruc');?>
	
	</div>

	<?php appthemes_after_sidebar_widgets( 'store' ); ?>

</div> <!-- #sidebar -->
