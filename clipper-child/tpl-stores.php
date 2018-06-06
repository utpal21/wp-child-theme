<?php
/**
 * Template Name: Stores Template
 *
 * @package Clipper\Templates
 * @author  AppThemes
 * @since   Clipper 1.1
 */


/*$term = get_queried_object();
$stores_url = esc_url( clpr_get_store_meta( $term->term_id, 'clpr_store_url', true ) );
$url_out = clpr_get_store_out_url( $term );*/
?>

<div class="top_custome_cupone clearfix">
	<div class="cpn_wrp frame">
		<?php 
		$args = array('post_type' => 'couponh', 'posts_per_page' =>3);
		$loop = new WP_Query($args);
		while ($loop->have_posts()) : $loop->the_post(); ?>
		<div class="cpn_ln">
			<div class="cpn_img">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="cpn_img_des">
				<div class="img_des_img">
				<?php
										// get an image field
				$image = get_field('company_image');

				// each image contains a custom field called 'link'
				$link = get_field('link', $image['ID']);

				// render
				?>
				<a href="#">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</a>
				<!--<img src="<?php //echo get_template_directory_uri();?>-child/images/com.jpg">-->					
				</div>
				<div class="img_des_title">
					<h3><?php the_title(); ?></h3>
				</div>

			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<?php wp_reset_query(); ?>
<div id="content">

	<!--Most Popular-->
<div class="most_popular">
	<div class="content_title">
		<h4>Active Coupons</h4>
	</div>
	<?php
		
		// show all active coupons for this store and setup pagination
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					query_posts( array(
						'post_type' => APP_POST_TYPE,
						'post_status' => 'publish',
						APP_TAX_STORE => $term->slug,
						'ignore_sticky_posts' => 1,
						'paged' => $paged
					) );
		?>
		<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<div class="cpn_bdy clearfix">
		<div class="cpn_bdy_img">

			<div class="img_bx">
				<a href="<?php echo clpr_get_first_term_link( $post->ID, APP_TAX_STORE ); ?>"><img src="<?php echo clpr_get_store_image_url( $post->ID, 'post_id', 110 ); ?>" alt="" /></a>
			</div>
		</div>
		<div class="cpn_bdy_con">
			<h4> <a href="<?php the_permalink(); ?>">
				<?php clpr_coupon_title(); ?>
			</a></h4>
			<div class="post_con">				
				<?php clpr_coupon_content(); ?>

			</div>			
		</div>
		<div class="cpn_bdy_rimg">
				<div class="see_coup">
					<a href="">
					<img src="<?php echo get_template_directory_uri();?>-child/images/seecoupon.png">
					</a>
				</div>
		</div>
		
	</div>
	<?php endwhile; ?>	

<?php else: ?>
	<div class="blog">

		<h3><?php _e( 'Sorry, no coupons found', APP_TD ); ?></h3>

	</div> <!-- #blog -->

<?php endif; ?>	
	<?php wp_reset_query(); ?>
</div>

<div class="cup_des clearfix">
<div class="main_cup_des clearfix">
<?php 
	$store_description = get_field('store_description', 11);
	echo $store_description;
?>	
</div>
</div>
<?php wp_reset_query(); ?>

	<!--Unreliable-->
<div class="most_popular">
	<div class="content_title">
		<h4>Unreliable Coupons</h4>
	</div>
	<?php //store_name();?>


	<?php		
		// show all unreliable coupons for this store and setup pagination
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					query_posts( array(
						'post_type' => APP_POST_TYPE,
						'post_status' => 'unreliable',
						APP_TAX_STORE => $term->slug,
						'ignore_sticky_posts' => 1,
						'paged' => $paged
					) );
		?>
		<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<div class="cpn_bdy clearfix">
		<div class="cpn_bdy_img">

			<div class="img_bx">
				<a href="<?php echo clpr_get_first_term_link( $post->ID, APP_TAX_STORE ); ?>"><img src="<?php echo clpr_get_store_image_url( $post->ID, 'post_id', 110 ); ?>" alt="" /></a>
			</div>
		</div>
		<div class="cpn_bdy_con">
			<h4> <a href="<?php the_permalink(); ?>">
				<?php clpr_coupon_title(); ?>
			</a></h4>
			<div class="post_con">				
				<?php clpr_coupon_content(); ?>

			</div>			
		</div>
		<div class="cpn_bdy_rimg">
				<div class="see_coup">
					<a href="">
					<img src="<?php echo get_template_directory_uri();?>-child/images/seecoupon.png">
					</a>
				</div>
		</div>
		
	</div>
	<?php endwhile; ?>	

<?php else: ?>
	<div class="cpn_bdy clearfix">

		<h3><?php _e( 'Sorry, no unreliable coupons found', APP_TD ); ?></h3>

	</div> <!-- #blog -->

<?php endif; ?>
<?php wp_reset_query(); ?>

</div>






	<!-- <div class="content-box">
		<div class="box-holder">
			<div class="blog">
				<h1><?php// _e( 'Browse by Store', APP_TD ); ?></h1>
				<div class="text-box">
					<?php //echo clpr_stores_list(); ?>
				</div>
			</div>
		</div>
	</div> -->
</div>

<?php get_sidebar( 'store' ); ?>
